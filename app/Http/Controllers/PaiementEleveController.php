<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Classe;
use Illuminate\Http\Request;
use App\Models\PaiementEleve;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;

class PaiementEleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payements = PaiementEleve::all();
        $eleves = Eleve::whereHas('inscription', function (Builder $query) {
            $query->where('annee_scolarite_id', get_last_session_id());
        })->orwhereHas('reinscriptions', function (Builder $query) {
            $query->where('annee_scolarite_id', get_last_session_id());
        })->get();
        $classes = Classe::all();
        return view('containers.payement.add-payement-eleve', compact('eleves','classes', 'payements'));
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
        // dd($request->all());
        $request->validate([
            'libelle'=> 'nullable|string|min:2|max:50',
            'eleve'=>  ['required', 'numeric', Rule::exists('eleves', 'id')],
            'classe'=>  ['required', 'numeric', Rule::exists('classes', 'id')],
            'montant_paye'=> ['required', 'numeric',],
            // 'annee_scolarite_id'=> 'nullable|string|min:2|max:50',
            'remise'=> 'nullable|string|min:2|max:50',
            // 'dernier_payement'=> 'nullable|string|min:2|max:50',
            // 'montant_total'=> 'nullable|string|min:2|max:50',
            // 'pourcentage'=> 'nullable|string|min:2|max:50',
        ]);
        // dd($request->all());


        // dd($request->all());
        $eleve_id = $request->eleve;

        $montant_paye = format_number($request->montant_paye);
        if ($montant_paye < 0) {
            Alert::error('Erreur', "Le montant payé doit être supérieur à 1 ! ");
            return back();
        }

        $classe_id = $request->classe;
        $libelle = $request->libelle;

        $eleve = get_eleve($eleve_id);

        $frais = get_frais_scolarite_classe($classe_id);

        if (!($frais)) {
            Alert::error('Erreur', "Frais de scolarité non établi pour la classe choisi !");
            return back();
        }
        $reinscrit = $eleve->reinscriptions()
                    ->where('annee_scolarite_id', get_last_session_id())->get();
        $total_a_payer = 0;
        // dump( $frais );
        if($reinscrit) {
            $total_a_payer = $frais->total_reinscription_scolarite;
        } else {
            $total_a_payer = $frais->total_inscription_scolarite;
        }
        // dd($reinscrit);


        // $frais_ins = $frais->inscription;
        // $total_inscription_scolarite = $frais->total_inscription_scolarite;

        // $libelle = "Inscription ";

        // if ($montant_paye > $frais_ins) {
        //     $libelle .= " + Scolarité";
        // }
        $paiement = $eleve->paiements()->where('annee_scolarite_id', get_last_session_id())->first();
        if($paiement) {
            $reste = $paiement->montant_total - $paiement->montant_paye;
            // dd($reste);

            if ($reste <= 0) {
                return back()->with(['msg-error' => "Cet eleve a déjà fini de payer les frais de scolarité !"]);
            }

            if ($montant_paye < 1) {
                return back()->with(['msg-error' => "Le montant payé doit être supérieur à 1 !"]);
            } elseif ($montant_paye > $reste) {
                return back()->with(['msg-error' => "Le montant payé est supérieur montant qui reste à payer pour ce eleve !"]);
            }

            $paiement->update([
                'libelle' => $libelle,
                'dernier_payement' => $montant_paye,
                'montant_paye' => $paiement->montant_paye += $montant_paye,
                // 'remise' => $remise,
                // 'reste' => $paiement->reste -= $montant_paye,
                // 'pourcentage' =>  $pourcentage,
            ]);
            // dd($paiement);

            // if ($paiement) {
                $historique = $eleve->historiquePaiements()->create([
                    'classe_id' => $eleve->classe_id,
                    'libelle' => $libelle,
                    'montant_paye' => $montant_paye,
                    'paiement_eleve_id' => $paiement->id,
                    // 'montant_total' => $total_inscription_scolarite,
                ]);
            // }

        } else {

            $paiement = $eleve->paiements()->create([
                'classe_id' => $eleve->classe->niveau->id,
                'libelle' => $libelle,
                'dernier_payement' => $montant_paye,
                'montant_paye' => $montant_paye,
                'montant_total' => $total_a_payer,
                // 'reste' => ($total_inscription_scolarite - $montant_paye),
                // 'pourcentage' => ($montant_paye / $total_inscription_scolarite),

            ]);

            if ($paiement) {
                $historique = $eleve->historiquePaiements()->create([
                    'niveau_id' => $eleve->classe->niveau->id,
                    // 'eleve_id' => $eleve->classe->niveau->id,
                    'libelle' => $libelle,
                    'montant_paye' => $montant_paye,
                    'paiement_eleve_id' => $paiement->id,
                    // 'montant_total' => $total_inscription_scolarite,
                ]);
            }
        }

        $fullname = $eleve->prenom . ' ' . $eleve->nom;
        return redirect()->route('paiementeleve.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaiementEleve  $paiementeleve
     * @return \Illuminate\Http\Response
     */
    public function show(PaiementEleve $paiementeleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaiementEleve  $paiementeleve
     * @return \Illuminate\Http\Response
     */
    public function edit(PaiementEleve $paiementeleve)
    {
        // $paiementeleve = PaiementEleve::all();
        // $eleves = Eleve::whereHas('inscription', function (Builder $query) {
        //     $query->where('annee_scolarite_id', get_last_session_id());
        // })->orwhereHas('reinscriptions', function (Builder $query) {
        //     $query->where('annee_scolarite_id', get_last_session_id());
        // })->get();
        // $classes = Classe::all();
        // dd($paiementeleve);
        return view('containers.payement.edit-payement-eleve',compact('paiementeleve'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaiementEleve  $paiementeleve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaiementEleve $paiementeleve)
    {
        $request->validate([
            'libelle'=> 'nullable|string|min:2|max:50',
            // 'eleve'=>  ['required', 'numeric', Rule::exists('eleves', 'id')],
            // 'classe'=>  ['required', 'numeric', Rule::exists('classes', 'id')],
            'montant_paye'=> ['required', 'string',],
            // 'annee_scolarite_id'=> 'nullable|string|min:2|max:50',
            // 'remise'=> 'nullable|string|min:2|max:50',
            // 'dernier_payement'=> 'nullable|string|min:2|max:50',
            // 'montant_total'=> 'nullable|string|min:2|max:50',
            // 'pourcentage'=> 'nullable|string|min:2|max:50',
        ]);
        // dd($request->all());
        $montant_paye = format_number($request->montant_paye);
        if ($montant_paye < 0) {
            Alert::error('Erreur', "Le montant payé doit être supérieur à 1 ! ");
            return back();
        }
        $libelle = $request->libelle;
        $new_tt_payer = ($paiementeleve->montant_paye - $paiementeleve->dernier_payement) + $montant_paye;
        $paiementeleve->update([
            // 'classe_id' => $eleve->classau->id,
            'libelle' => $libelle,
            'dernier_payement' => $montant_paye,
            'montant_paye' => $new_tt_payer,
            // 'montant_total' => $total_a_payer,
            // 'reste' => ($total_inscription_scolarite - $montant_paye),
            // 'pourcentage' => ($montant_paye / $total_inscription_scolarite),

        ]);
        $paiementeleve->historiquePaiements()->get()->last()->update([
            'libelle' => $libelle,
            'montant_paye' => $montant_paye,
        ]);
        return redirect()->route('paiementeleve.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaiementEleve  $paiementeleve
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaiementEleve $paiementeleve)
    {
        // dd($paiementeleve);
        if($paiementeleve->montant_paye) {
            $dernier_payement = $paiementeleve->historiquePaiements()->get()->last()->montant_paye ?? 0;
            $paiementeleve->historiquePaiements()->get()->last()->delete();

            $new_montant_payer = $paiementeleve->montant_paye - $paiementeleve->dernier_payement;

            $paiementeleve->update([
                'montant_paye' => $new_montant_payer,
                'dernier_payement' => $dernier_payement,
            ]);


        } else {

            $paiementeleve->historiquePaiements()->delete();
            $paiementeleve->delete();

        }

        return Redirect()->route('paiementeleve.index');
    }
}
