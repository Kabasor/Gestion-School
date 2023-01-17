<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profs = Prof::all();
        return view('admin.profs.prof', compact('profs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profs.add-prof');
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
            'matricule' => ['required', 'string', 'min:2', 'max:225', Rule::unique('profs')],
            'nom'=> ['required', 'string', 'min:2', 'max:225'],
            'prenom'=> ['required', 'string', 'min:2', 'max:225'],
            'email'=> ['required', 'string', 'email', 'max:225'],
            'diplome'=> ['required', 'string', 'min:2', 'max:225'],
            'phone'=> ['required', 'string', 'min:9', 'max:30'],
            'adresse'=> ['required', 'string', 'min:2', 'max:225'],
            'genre'=> ['required', 'string', 'min:2', 'max:10'],
            'nationalite'=> ['required', 'string', 'min:2', 'max:225'],
            'dateNaissance'=> ['required', 'string', 'min:2', 'max:225'],
            'lieuNaissance'=> ['required', 'string', 'min:2', 'max:225'],
            'description'=> ['required', 'string', 'min:2', 'max:225'],
             'image'=> ['nullable', 'image', 'mimes:jpeg,jpg,png',],
        ]);


            $image = $request->file('image');
            $destination = 'image/';
            $username = ($request->nom . ' ' . $request->prenom);
            $profile = date('YmdHis').".". $filename = $username . '.' . time() . '.' . $request->image->extension();
            $image->move($destination , $profile);
            $validate['image'] = $profile;
            $prof= Prof::create($validate);
            return redirect()->route('prof.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function show(Prof $prof)
    {
        return view('admin.profs.show-prof',compact('prof'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function edit(Prof $prof)
    {
        return view('admin.profs.edit-prof',compact('prof'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prof $prof)
    {
        $validate = $request->validate([
            'matricule' => ['required', 'string', 'min:2', 'max:225'],
            'nom'=> ['required', 'string', 'min:2', 'max:225'],
            'prenom'=> ['required', 'string', 'min:2', 'max:225'],
            'email'=> ['required', 'string', 'email', 'max:225'],
            'diplome'=> ['required', 'string', 'min:2', 'max:225'],
            'phone'=> ['required', 'string', 'min:9', 'max:30'],
            'adresse'=> ['required', 'string', 'min:2', 'max:225'],
            'genre'=> ['required', 'string', 'min:2', 'max:10'],
            'nationalite'=> ['required', 'string', 'min:2', 'max:225'],
            'dateNaissance'=>'nullable|date',
            'lieuNaissance'=> ['required', 'string', 'min:2', 'max:225'],
            'description'=> ['nullable', 'string', 'min:2', 'max:225'],
            'image'=> ['nullable', 'image', 'mimes:jpeg,jpg,png',],
        ]);
        $prof->update([
            'matricule' => $request->matricule,
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'email'=>$request->email,
            'diplome'=>$request->diplome,
            'phone'=>$request->phone,
            'adresse'=>$request->adresse,
            'genre'=>$request->genre,
            'nationalite'=>$request->nationalite,
            'dateNaissance'=>$request->dateNaissance,
            'lieuNaissance'=>$request->lieuNaissace,
            'description'=>$request->description,
            'image'=>$request->image,
        ]);

       
        return \redirect()->route('prof.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prof $prof)
    {
        $prof->delete();
        return \redirect()->route('prof.index');
    }
}
