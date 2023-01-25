<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Enums\EnumSexe;
use App\Enums\EnumFonction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.utilisateur.utilisateur',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.utilisateur.add-utilisateur');
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
            'matricule '=>'required|string|min:2|max:30',
            'nom '=>'required|string|min:2|max:30',
            'prenom '=>'required|string|min:2|max:50',
            'email'=>'required|string|email|max:50|unique:users',
            'telephone'=> 'nullable|numeric|digits:9',
            'fonction '=>['required', 'string', 'min:3', 'max:15', new Enum(EnumFonction::class)],
            'role '=>'required|string|min:2|max:50',
            'diplome'=>'required|string|min:2|max:50',
            'date_naissance '=>'nullable|date',
            'lieu_naissance '=>'nullable|string|min:2|max:50',
            'biographie '=>'nullable|string|min:3|max:255',
            'adresse '=>'nullable|string|min:3|max:100',
            'sexe '=>['required', 'string', 'min:3', 'max:15', new Enum(EnumSexe::class)],
            'photo '=>['nullable', 'image', 'mimes:jpeg,jpg,png',],
            'salaire '=>['nullable', 'string', 'min:0',],
            'active '=>['nullable', 'string', 'min:0',],
            'password'=>'nullable|string|min:4|max:8',
        ]);


        if ($request->hasFile('photo')) {
            $username = Str::slug($request->nom . ' ' . $request->prenom);
            $filename = $username . '.' . time() . '.' . $request->photo->extension();

            $path = $request->file('photo')->storeAs(
                'users',
                $filename,
                'public',
            );

            $image = Image::make(public_path("/storage/{$path}"))->fit(150, 150);
            $image->save();
        } else {
            $path = '';
        }
        User::create([
            "matricule" => $request->matricule,
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "email" => $request->email,
            "telephone" =>$request->telephone,
            "fonction" => $request->fonction,
            "role" => $request->role,
            "diplome" =>$request->diplome,
            // "date_naissance" =>"date",
            "lieu_naissance" =>$request->lieu_naissance,
            "biographie" =>$request->biographie,
            "adresse" =>$request->adresse,
            "sexe" =>$request->sexe,
            "photo" =>$request->photo,
            // "salaire" =>"",
            // "active" =>1,
            "password" => Hash::make(12345678),
        ]);

        // $user = User::create([
        //     'matricule'=> $request->matricule,
        //     'nom'=> $request->nom,
        //     'prenom'=> $request->prenom,
        //     'email'=> $request->email,
        //     'telephone'=> $request->telephone,
        //     'fonction'=> $request->fonction,
        //     'role'=> $request->role,
        //     'diplome'=> $request->diplome,
        //     'date_naissance'=> $request->date_naissance,
        //     'lieu_naissance'=> $request->lieu_naissance,
        //     'biographie'=> $request->biographie,
        //     'adresse'=> $request->adresse,
        //     'sexe'=> $request->sexe,
        //     'photo'=> $request->path,
        //     'salaire'=> $request->salaire,
        //     'active'=> $request->active,
        //     'password'=> Hash::make($request->password),
        // ]);

        $fullname = $user->prenom . ' ' . $user->nom;

        Alert::success('Félicitation', "Inscription de Mr:{$fullname} effectuée avec succès !");

        return back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
