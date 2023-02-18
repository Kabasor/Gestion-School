<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Niveau;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\PaiementProfesseur;

class PaiementProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paiementProfesseurs = PaiementProfesseur::all();

        // $profs = Prof::whereHas('prof', function (Builder $query) {
        //     $query->where('annee_scolarite_id', get_last_session_id());
        // });

        $profs = Prof::all();
        $niveaux = Niveau::all();
        $matieres = Matiere::all();
        return view('containers.payement-professeurs.liste-payement-professeur',compact('paiementProfesseurs','profs','niveaux','matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paiementProfesseur = PaiementProfesseur::all();
        $profs = Prof::all();
        $niveaux = Niveau::all();
        $matieres = Matiere::all();
        return view('containers.payement-professeurs.add-payement-professeur',compact('paiementProfesseur','profs','niveaux','matieres'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
       $request->validate([
        'prix_par_heure'=>'nullable|string|min:2|max:50',
        'taux_horaire'=>'nullable|string|min:2|max:50',
        'nombre_dheure'=>'nullable|string|min:2|max:50',
        'mois'=>'nullable|string|min:2|max:50',
        'montant'=>'nullable|string|min:2|max:50',
        'matiere_id'=>$request->matiere,
        'prof_id'=> ['required', 'numeric', Rule::exists('profs', 'id')],
        'niveau_id'=> ['required', 'numeric', Rule::exists('niveaux', 'id')],
       ]);

       $paiementProfesseur = PaiementProfesseur::create([
        'prix_par_heure'=>$request->$prix_par_heure,
        'taux_horaire'=>$request->$taux_horaire,
        'nombre_dheure'=>$request->$nombre_dheure,
        'mois'=>$request->$mois,
        'montant'=>$request->$montant,
        'matiere_id'=>$request->matiere,
        'prof_id'=>$request->prof,
        'niveau_id'=>$request->niveau,
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaiementProfesseur  $paiementProfesseur
     * @return \Illuminate\Http\Response
     */
    public function show(PaiementProfesseur $paiementProfesseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaiementProfesseur  $paiementProfesseur
     * @return \Illuminate\Http\Response
     */
    public function edit(PaiementProfesseur $paiementProfesseur)
    {

        return view('containers.payement-professeurs.edit-payement-professeur');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaiementProfesseur  $paiementProfesseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaiementProfesseur $paiementProfesseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaiementProfesseur  $paiementProfesseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaiementProfesseur $paiementProfesseur)
    {
        //
    }
}
