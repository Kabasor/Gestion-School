<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Classe;
use App\Models\Emploie;
use App\Models\Matiere;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class EmploiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emploies = Emploie::all();
        $matieres = Matiere::all();
        $classes = Classe::all();
        $profs = Prof::all();
        return view('admin.emploies.emploie',compact( 'emploies','profs','classes','matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emploies = Emploie::all();
        $matieres = Matiere::all();
        $classes = Classe::all();
        $profs = Prof::all();
        return view('admin.emploies.add-emploie',compact('emploies','profs','classes','matieres'));
        // return view('admin.emploies.add-emploie',['classes'=>Classe::get(['id','libelle'])],
        // ['matieres'=>Matiere::get(['id','nom_matiere'])], ['profs'=>Prof::get(['id','nom'])]
        //     );
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
            'jour' => 'required|string|min:2|max:30',
            'heure_debut' => 'required|string|min:2|max:30',
            'heure_fin' => 'required|string|min:2|max:30',
            'durer' => 'nullable|string|min:1|max:4',
            'classe' => ['required', 'numeric', Rule::exists('classes', 'id')],
            'prof' => ['required', 'numeric', Rule::exists('profs', 'id')],
            'matiere' => ['required', 'numeric', Rule::exists('matieres', 'id')],
        ]);
        // dd($request->all());

        // $fullname = $prof->nom.' ' .$prof->prenom;

        $emploie = Emploie::create([
            'jour' => $request->jour,
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'durer' => $request->durer,
            'classe_id' => $request->classe,
            'prof_id' => $request->prof,
            'matiere_id' => $request->matiere,
        ]);

        return redirect()->route('emploie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Emploie $emploie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Emploie $emploie)
    {
        $emploies = Emploie::all();
        $matieres = Matiere::all();
        $classes = Classe::all();
        $profs = Prof::all();
        return view('admin.emploies.edit-emploie',compact('emploie','profs','classes','matieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emploie $emploie)
    {

        $request->validate([
            'jour' => 'required|string|min:2|max:30',
            'heure_debut' => 'required|string|min:2|max:30',
            'heure_fin' => 'required|string|min:2|max:30',
            'durer' => 'nullable|string|min:1|max:4',
            'classe' => ['required', 'numeric', Rule::exists('classes', 'id')],
            'prof' => ['required', 'numeric', Rule::exists('profs', 'id')],
            'matiere' => ['required', 'numeric', Rule::exists('matieres', 'id')],
        ]);
        $emploie->update([
            'jour' => $request->jour,
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'durer' => $request->durer,
            'classe_id' => $request->classe,
            'prof_id' => $request->prof,
            'matiere_id' => $request->matiere,
        ]);

        return redirect()->route('emploie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emploie $emploie)
    {
        $emploie->delete();
        return redirect()->route('emploie.index');
    }
}
