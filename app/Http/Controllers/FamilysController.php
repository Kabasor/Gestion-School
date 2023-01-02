<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FamilysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familles= Famille::all();
        return view('admin.families.family',compact('familles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.families.add-family');
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
            'pere'=>'required',
            'mere'=>'required',
            'responsable'=>'required',
            'numero'=>'required',
            'adresse'=>'required',
        ]);

        $famille = Famille::create($validate);
        $msg="Une Noulle famille a été ajouté avec succés";
        Alert::success('Felicitation', $msg);
        return \redirect()->route('famille.index');
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
    public function edit(Famille $famille)
    {
        return view('admin.families.edit-family',compact('famille'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Famille $famille)
    {
        $validate = $request->validate([
            'pere'=>'required',
            'mere'=>'required',
            'responsable'=>'required',
            'numero'=>'required',
            'adresse'=>'required',
        ]);

        $famille->update([
            'pere'=>$request->pere,
            'mere'=>$request->mere,
            'responsable'=>$request->responsable,
            'numero'=>$request->numero,
            'adresse'=>$request->adresse,
        ]);

        $msg="la famille a été modifiée avec succés";
        Alert::warning('Felicitation',$msg);
        return redirect()->route('famille.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Famille $famille)
    {
        $famille->delete();
        $msg="Une famille a été suprimé avec succés";
        Alert::alert('Felicitation', $msg);
        return \redirect()->route('famille.index');
    }
}
