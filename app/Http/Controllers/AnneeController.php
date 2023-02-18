<?php

namespace App\Http\Controllers;

use App\Models\Anneescolaire;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AnneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annees = Anneescolaire::all();
        return view('admin.annees.annee',compact('annees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.annees.add-annee');
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
            'anneescolaire'=>'required|string|min:8',
            'date_debut'=>'nullable|numeric',
            'date_fin'=>'nullable|numeric',
            'description'=>'nullable|string|min:3',
        ]);


        $annee = Anneescolaire::create([
            'anneescolaire' => $request->anneescolaire,
            'date_debut'=>$request->date_debut,
            'date_fin'=>$request->date_fin,
            'description'=>$request->description,

        ]);
        return redirect()->route('annee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anneescolaire $annee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anneescolaire $annee)
    {
        return view('admin.annees.edit-annee',compact('annee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anneescolaire $annee)
    {
        $validate = $request->validate([
            'anneescolaire'=>'required|string|min:8',
            'date_debut'=>'nullable|numeric',
            'date_fin'=>'nullable|numeric',
            'description'=>'nullable|string|min:3',
        ]);

        $annee->update([
            'anneescolaire' => $request->anneescolaire,
            'date_debut'=>$request->date_debut,
            'date_fin'=>$request->date_fin,
            'description'=>$request->description

        ]);
        return redirect()->route('annee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , Anneescolaire $annee)
    {
        $annee->delete();
        return redirect()->route('annee.index');
    }
}
