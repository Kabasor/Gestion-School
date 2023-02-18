<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Classe;
use App\Enums\EnumSexe;
use Illuminate\Http\Request;
use App\Models\Reinscription;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Database\Eloquent\Builder;

class ReinscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = Eleve::whereDoesntHave('reinscriptions', function (Builder $query) {
            $query->where('annee_scolarite_id', get_last_session_id());
        })->get();
        $classes = Classe::with(['niveau'])->oldest()->get();
        $reinscriptions = Reinscription::all();
        return view('containers.gestion-eleves.reinscriptions.liste-reinscription', compact('eleves', 'classes', 'reinscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eleves = Eleve::whereDoesntHave('reinscriptions', function (Builder $query) {
            $query->where('annee_scolarite_id', get_last_session_id());
        })->get();
        $classes = Classe::with(['niveau'])->oldest()->get();
        $reinscriptions = Reinscription::all();
        return view('containers.gestion-eleves.reinscriptions.add-reinscription', compact('eleves', 'classes', 'reinscriptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'matricule' => 'required|string|min:2|max:30',
            // 'nom' => 'required|string|min:2|max:30',
            // 'prenom' => 'required|string|min:2|max:50',
            'eleve' => ['required', 'numeric', Rule::exists('eleves', 'id')],
            'classe' => ['required', 'numeric', Rule::exists('classes', 'id')],
            'montant_paye' => ['nullable', 'string', 'min:0',],
        ]);

        $eleve_request =$request->eleve ;
        $classe_request =$request->classe;
        $eleve = get_eleve($eleve_request);
        $classe = get_classe($classe_request);
        // $montant_paye = format_number($request->montant_paye);
        // dump($eleve);
        // dd($classe->fraisScolarite);
        // if ($montant_paye < 0) {
        //     Alert::error('Erreur', "Le montant payé doit être supérieur à 1 ! ");
        //     return back();
        //     // return back()->with(['msg-error' => "Le montant payé doit être supérieur à 1 !"]);
        // }
        // $classe_id = $request->classe;
        // $classe = get_classe($classe_id);

        // $frais = $classe->fraisScolarite;

        // if (!($frais)) {

        //     Alert::error('Erreur', "Frais de scolarité non établi pour la classe choisi !");
        //     return back();
        // }

        // $frais_reins = $frais->reinscription;
        // $total_reinscription_scolarite = $frais->total_reinscription_scolarite;

        $eleve->update([
            // 'matricule' => $request->matricule,
            // 'nom' => $request->nom,
            // 'prenom' => $request->prenom,
            // 'eleve_id' => $eleve,
            'classe_id' => $classe_request,
            // 'montant_paye'=>$montant_paye,
            // 'nouveau' => true,
            'status' => true,
        ]);
        $libelle = "Reinscription ";

        // if ($montant_paye > $frais_reins) {
        //     $libelle .= " + Scolarité";
        // }
        // $eleve->inscription()->save($inscription);
        $reinscription = $eleve->reinscriptions()->create([
            // 'libelle' => $libelle,
            // 'montant_reinscription' => $frais_reins,
            // 'montant' => $total_reinscription_scolarite,
            // 'eleve_id' => $eleve->eleve_id,
            'classe_id' => $classe_request,
            "annee_scolarite_id" => get_last_session_id(),
            // 'classe_id' => $classe_request,
            // 'montant_paye' => $montant_paye,
            // 'reste' => ($total_reinscription_scolarite - $montant_paye),
            // 'pourcentage' => ($montant_paye / $total_reinscription_scolarite),
        ]);

        // $paiement = $eleve->paiements()->create([
        //     // 'eleve_id' => $eleve->classe->niveau->id,
        //     'niveau_id' => $eleve->classe->niveau->id,
        //     'libelle' => $libelle,
        //     // 'dernier_payement' => $montant_paye,
        //     'montant_total' => $total_reinscription_scolarite,
        //     // 'reste' => ($total_reinscription_scolarite - $montant_paye),
        //     // 'pourcentage' => ($montant_paye / $total_reinscription_scolarite),
        //     // 'status' => false,
        // ]);

        // if ($paiement) {
        //     $historique = $eleve->historiquePaiments()->create([
        //         'niveau_id' => $eleve->classe->niveau->id,
        //         // 'eleve_id' => $eleve->classe->niveau->id,
        //         'libelle' => $libelle,
        //         // 'montant_paye' => $montant_paye,
        //         'paiement_eleve_id' => $paiement->id,
        //         // 'montant_total' => $total_inscription_scolarite,
        //     ]);
        // }

        // $fullname = $eleve->prenom . ' ' . $eleve->nom;

        // Alert::success('Félicitation', "Inscription de l eleve{$feminin} {$fullname} effectuée avec succès !");

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reinscription  $reinscription
     * @return \Illuminate\Http\Response
     */
    public function show(Reinscription $reinscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reinscription  $reinscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Reinscription $reinscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reinscription  $reinscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reinscription $reinscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reinscription  $reinscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reinscription $reinscription)
    {
        $reinscription->delete();
        return redirect()->route('reinscription.index');
    }

    public function print()
    {
        $reinscriptions = Reinscription::AnneeScolariteId()->latest()->get();
        // dd($inscriptions);
        $pdf = Pdf::loadView('services.gestion-etudiants.reinscription.liste-reinscription', compact('reinscriptions'));
        // (Optional) Setup the paper size and orientation
        $pdf->setPaper('A4', 'landscape');


        return $pdf->stream('liste-reinscription');
    }

}

