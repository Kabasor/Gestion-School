<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Niveau;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::all();
        return view('admin.classes.classes',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classes.add-classes',['niveaux'=>Niveau::get(['id','libelle'])]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'niveau'=> ['required', 'integer', 'min:1', Rule::exists('niveaux', "id")],
            'libelle'=> 'required|string|min:2|max:255',
            'description'=> ['nullable', 'string', 'min:3', 'max:255']

        ]);
        // dd($request->all());
        $classe= Classe::create([
            'libelle' => $request->libelle,
            'description' => $request->description,
        ]);
        $msg="Une Noulle Année a été ajouté avec succés";
        Alert::success('Felicitation', $msg);
        return \redirect()->route('classe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Classe $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {

        $niveaux = Niveau::all();
        return view('admin.classes.edit-classes', compact('classe','niveaux'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        $request->validate([
            'niveau'=> ['required', 'integer', 'min:1', Rule::exists('niveaux', "id")],
            'libelle'=>'required|min:2|max:255',
            'description'=>''

        ]);
        $classe->update([
            'niveau_id'=>$request->niveau,
            'libelle'=>$request->libelle,
            'description'=>$request->description,
        ]);

        $msg="la classe de {$classe->libelle} a été modifiée avec succés";
        Alert::warning('Felicitation',$msg);
        return redirect()->route('classe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Classe $classe)
    {
        $classe->delete();
        $msg="Une Année a été suprimé avec succés";
        Alert::alert('Felicitation', $msg);
        return \redirect()->route('classe.index');
    }
}
