<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Famille;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('admin.eleves.eleve',compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $familles = Famille::all();
        //['familles'=>Famille::get(['id','pere'])]
        return view('admin.eleves.add-eleve',);
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
            'matricule'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'dateNaissance'=>'required|date',
            'lieuNaissance'=>'required',
            'genre'=>'required',
            'nationalite',
            'pere'=>'required',
            'mere'=>'required',
            'tuteur'=>'required',
            'phone'=>'required|min:9',
            'adresse'=>'required',
            'photo'=>'required|mimes:jpg,jpeg,gif,png,svg',

            // 'famille_id'=>['required', 'integer', 'min:1', Rule::exists('familles', "id")],

        ]);
        $photo = $request->file('photo');
        $destination = 'image/';
        $profile = date('YmdHis').".".$image->getClientOriginalExtension();
        $image->move($destination , $profile);
        $validate['image'] = $profile;

        $eleve= Eleve::create($validate);
        $msg="Un eleve a été ajouté avec succés";
        Alert::success('Felicitation', $msg);
        return \redirect()->route('eleve.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        $familles = Famille::all();
        return view('admin.eleves.edit-eleve', compact('eleve','familles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eleve $eleve)
    {

        $request->validate([
            'matricule'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'dateNaissance'=>'required|date',
            'lieuNaissance'=>'required',
            'genre'=>'required',
            'nationalite',
            'pere'=>'required',
            'mere'=>'required',
            'tuteur'=>'required',
            'phone'=>'required|min:9',
            'adresse'=>'required',
        ]);

        $eleve->update([
            'matricule'=>$request->matricule,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'dateNaissance'=>$request->dateNaissance,
            'lieuNaissance'=>$request->lieuNaissance,
            'genre'=>$request->genre,
            'nationalite'=>$request->nationalite,
            'pere'=>$request->pere,
            'mere'=>$request->mere,
            'tuteur'=>$request->tuteur,
            'phone'=>$request->phone,
            'adresse'=>$request->adresse,

        ]);

        $msg="l'eleve a été modifiée avec succés";
        Alert::warning('Felicitation',$msg);
        return redirect()->route('eleve.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request, Eleve $eleve)
    {
        $eleve->delete();
        $msg="Une Année a été suprimé avec succés";
        Alert::alert('Felicitation', $msg);
        return \redirect()->route('eleve.index');
    }
}
