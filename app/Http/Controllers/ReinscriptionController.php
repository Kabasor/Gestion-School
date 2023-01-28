<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Reinscription;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

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
<<<<<<< HEAD
        
        $classes = Classe::with(['niveau'])->oldest()->get();
        $reinscriptions = Reinscription::all();

=======
        $classes = Classe::with(['niveau'])->oldest()->get();
        $reinscriptions = Reinscription::all();
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
        return view('containers.gestion-eleves.reinscriptions.reinscription', compact('eleves', 'classes', 'reinscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $request->validate([
            'matricule' => 'required|string|min:2|max:30',
            'nom' => 'required|string|min:2|max:30',
            'prenom' => 'required|string|min:2|max:50',
            'date_de_naissance' => 'nullable|date',
            'lieu_de_naissance' => 'nullable|string|min:2|max:50',
            'sexe' => ['required', 'string', 'min:3', 'max:15', new Enum(EnumSexe::class)],
            'nationalite' => 'required|string|min:3|max:30',
            'pere' => 'nullable|string|min:3|max:100',
            'mere' => 'nullable|string|min:3|max:100',
            'tuteur' => 'nullable|string|min:3|max:100',
            'telephone_tuteur' => 'nullable|numeric|digits:9',
            'email_tuteur' => 'nullable|string|email|max:50|unique:eleves',
            'adresse_tuteur' => 'nullable|string|min:3|max:30',
            'classe' => ['required', 'numeric', Rule::exists('classes', 'id')],
            'photo' => ['nullable', 'image', 'mimes:jpeg,jpg,png',],
            'montant_paye' => ['nullable', 'string', 'min:0',],
        ]);
        // dd($request->all());

        if ($request->hasFile('photo')) {
            $username = Str::slug($request->nom . ' ' . $request->prenom);
            $filename = $username . '.' . time() . '.' . $request->photo->extension();

            $path = $request->file('photo')->storeAs(
                'eleves',
                $filename,
                'public',
            );

            $image = Image::make(public_path("/storage/{$path}"))->fit(150, 150);
            $image->save();
        } else {
            $path = '';
        }
        $montant_paye = format_number($request->montant_paye);
        if ($montant_paye < 0) {
            Alert::error('Erreur', "Le montant payé doit être supérieur à 1 ! ");
            return back();
            // return back()->with(['msg-error' => "Le montant payé doit être supérieur à 1 !"]);
        }
        $classe_id = $request->classe;
        // $classe = get_classe($classe_id);

        $frais = get_frais_scolarite_classe($classe_id);

        if (!($frais)) {

            Alert::error('Erreur', "Frais de scolarité non établi pour la classe choisi !");
            return back();
        }

        $frais_ins = $frais->inscription;
        $total_inscription_scolarite = $frais->total_inscription_scolarite;

        $eleve = Eleve::create([
            'matricule' => $request->matricule,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_de_naissance,
            'lieu_naissance' => $request->lieu_de_naissance,
            'sexe' => $request->sexe,
            'nationalite' => $request->nationalite,
            'pere' => $request->pere,
            'mere' => $request->mere,
            'tuteur' => $request->tuteur,
            'telephone_tuteur' => $request->telephone_tuteur,
            'adresse_tuteur' => $request->adresse_tuteur,
            'email_tuteur' => $request->email_tuteur,
            'photo' => $path,
            // 'nouveau' => true,
            'status' => true,
        ]);
        $libelle = "Inscription ";

        if ($montant_paye > $frais_ins) {
            $libelle .= " + Scolarité";
        }
        // $eleve->inscription()->save($inscription);
        $inscription = $eleve->inscription()->create([
            'libelle' => $libelle,
            // 'status' => false,
            'montant_inscription' => $frais_ins,
            'montant' => $total_inscription_scolarite,
            'montant_paye' => $montant_paye,
            'pourcentage' => ($montant_paye / $total_inscription_scolarite),
        ]);

        $paiement = $eleve->paiements()->create([
            // 'eleve_id' => $eleve->classe->niveau->id,
            'niveau_id' => $eleve->classe->niveau->id,
            'libelle' => $libelle,
            'dernier_payement' => $montant_paye,
            'montant_total' => $total_inscription_scolarite,
            // 'reste' => ($total_inscription_scolarite - $montant_paye),
            'pourcentage' => ($montant_paye / $total_inscription_scolarite),
            // 'status' => false,
        ]);

        if ($paiement) {
            $historique = $eleve->historiquePaiments()->create([
                'niveau_id' => $eleve->classe->niveau->id,
                // 'eleve_id' => $eleve->classe->niveau->id,
                'libelle' => $libelle,
                'montant_paye' => $montant_paye,
                'paiement_eleve_id' => $paiement->id,
                // 'montant_total' => $total_inscription_scolarite,
            ]);
        }

        $feminin = $eleve->sexe === EnumSexe::FEMININ->value ? 'e' : '';
        $fullname = $eleve->prenom . ' ' . $eleve->nom;

        Alert::success('Félicitation', "Inscription de l eleve{$feminin} {$fullname} effectuée avec succès !");

        return back();

>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
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
        //
    }
}
