<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NiveauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveaux = Niveau::all();
        return view('admin.niveaux.niveaux',compact('niveaux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveau = Niveau::all();
        return view('admin.niveaux.add-niveaux',compact('niveau'));
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
            'libelle'=>'required|min:2|max:255',
            'description'=>'nullable'

        ]);

        $niveau= Niveau::create($validate);
        $msg="Une Noulle Année a été ajouté avec succés";
        Alert::success('Felicitation', $msg);
        return \redirect()->route('niveau.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Niveau $niveau)
    {
        // return view('admin.niveaux.show',compact('niveau'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveau $niveau)
    {
        // $niveaux = Niveau::all();
        return view('admin.niveaux.edit-niveaux',compact('niveau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niveau $niveau)
    {
        $update=[

            'libelle'=>'required|min:2|max:255',
            'description'=>'nullable'
        ];
        $niveau->update([
            'libelle'=>$request->libelle,
            'description'=>$request->description,
        ]);

        $msg="la classe de {$niveau->libelle} a été modifiée avec succés";
        Alert::warning('Felicitation',$msg);
        return redirect()->route('niveau.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Niveau $niveau)
    {
        $niveau->delete();
        $msg="Une Année a été suprimé avec succés";
        Alert::alert('Felicitation', $msg);
        return \redirect()->route('niveau.index');
    }
}
