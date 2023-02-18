<?php

namespace App\Http\Controllers;

use App\Models\rc;
use App\Models\Prof;
use App\Models\Classe;
use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = Matiere::all();
        $classes = Classe::all();
        $profs = Prof::all();
        return view('admin.matieres.matiere',compact('classes', 'profs', 'matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Matiere $matiere)
    {
        return view('admin.matieres.add-matiere',['classes'=>Classe::get(['id','libelle'])]);
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
            'nom_matiere' => 'required|string|min:2|max:30',
            'coefficient' => 'required|numeric|min:1|max:4',
            'classe_id' => 'nullable|string|min:2|max:50',
            // 'prof_id' => 'nullable|string|min:2|max:50',
        ]);


        $matiere=Matiere::create([
            'nom_matiere' => $request->nom_matiere,
            'coefficient' =>  $request->coefficient,
            'classe_id' =>  $request->classe
            // 'prof_id' =>  $prof->id,
        ]);

        return redirect()->route('matiere.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        $classes = Classe::all();
        return view('admin.matieres.edit-matiere', compact('matiere','classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        $request->validate([
            'nom_matiere' => 'required|string|min:2|max:30',
            'coefficient' => 'required|numeric|min:1|max:4',
            'classe_id' => 'nullable|string|min:2|max:50',
            // 'prof_id' => 'nullable|string|min:2|max:50',
        ]);


        $matiere->update([
            'nom_matiere' => $request->nom_matiere,
            'coefficient' =>  $request->coefficient,
            'classe_id' =>  $request->classe
            // 'prof_id' =>  $prof->id,
        ]);
        return redirect()->route('matiere.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        $matiere->delete();
        return redirect()->route('matiere.index');
    }
}
