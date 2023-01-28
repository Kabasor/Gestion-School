<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\FraisScolarite;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class FraisScolariteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fraisScolarites = FraisScolarite::with('classe')->latest()->get();
        $classes = Classe::all();

        return view('containers.parametres.frais-scolarite', compact('fraisScolarites', 'classes'));
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

        $request->validate([
            'classe' => ['required', "numeric",'min:1', Rule::exists('classes', "id"), Rule::unique('frais_scolarites', 'classe_id')],
            'prix_inscription' => ['required', "string", 'min:1',],
            'prix_reinscription' => ['required', "string", 'min:1',],
            'scolarite_annuel' => ['required', "string", 'min:1',],
            'premiere_tranche' => ['required', "string", 'min:1',],
            'deuxieme_tranche' => ['required', "string", 'min:1',],
            'troisieme_tranche' => ['required', "string", 'min:1',],
        ]);

        // dd($request->all());

        $prix_inscription = format_number($request->prix_inscription);
        $prix_reinscription = format_number($request->prix_reinscription);
        $scolarite_annuel = format_number($request->scolarite_annuel);
        $premiere_tranche = format_number($request->premiere_tranche);
        $deuxieme_tranche = format_number($request->deuxieme_tranche);
        $troisieme_tranche = format_number($request->troisieme_tranche);

        $fraisScolarite = FraisScolarite::create([
            'inscription' => $prix_inscription,
            'reinscription' => $prix_reinscription,
            'scolarite' => $scolarite_annuel,
            'premiere_tranche_scolarite_inscription' => $premiere_tranche,
            'deuxieme_tranch_scolarite_inscription' => $deuxieme_tranche,
            'troisieme_tranch_scolarite_inscription' => $troisieme_tranche,
            'total_inscription_scolarite' => ($scolarite_annuel + $prix_inscription),
            'total_reinscription_scolarite' => ($scolarite_annuel + $prix_reinscription),
        ]);

        Alert::success('Félicitation', "Frais de scolarite bien etabli");
        return back();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FraisScolarite  $fraisScolarite
     * @return \Illuminate\Http\Response
     */
    public function show(FraisScolarite $fraisScolarite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FraisScolarite  $fraisScolarite
     * @return \Illuminate\Http\Response
     */
    public function edit(FraisScolarite $fraisScolarite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FraisScolarite  $fraisScolarite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FraisScolarite $fraisScolarite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FraisScolarite  $fraisScolarite
     * @return \Illuminate\Http\Response
     */
    public function destroy(FraisScolarite $fraisScolarite)
    {
        //
    }

    public function get_frais_scolarite_classe($classe)
    {

        $frais_scolarite = FraisScolarite::whereRelation('classe', 'classe_id', $classe)->first();

        return response()->json(['frais_scolarite' => $frais_scolarite]);
    }
}
