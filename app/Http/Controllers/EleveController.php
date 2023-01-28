<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
<<<<<<< HEAD
use Intervention\Image\Facades\Image;
=======
use Illuminate\Validation\Rules\Enum;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
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
<<<<<<< HEAD
        return view('containers.gestion-eleves.eleves.eleves', compact('eleves'));
        // return view('admin.eleves.eleve',compact('eleves'));
=======
        
        return view('containers.gestion-eleves.eleves.eleves', compact('eleves'));

>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'matricule' => 'required|string|min:2|max:30',
            'nom' => 'required|string|min:2|max:30',
            'prenom' => 'required|string|min:2|max:50',
            'date_de_naissance' => 'nullable|date',
            'lieu_de_naissance' => 'nullable|string|min:2|max:50',
            'sexe' => ['required', 'string', 'min:3', 'max:15', new Enum(EnumSexe::class)],
            'nationalite' => 'required|string|min:3|max:30',
            'pere' => 'nullable|string|min:3|max:100',
            'mere' => 'nullable|string|min:3|max:100',
            'tuteur' => 'nullable|string|min:3|max:100',
            'telephone_tuteur' => 'nullable|numeric|digits:9',
            'email_tuteur' => 'nullable|string|email|max:50|unique:eleves',
            'adresse_tuteur' => 'nullable|string|min:3|max:30',
            'classe' => ['required', 'numeric', Rule::exists('classes', 'id')],
            'photo' => ['nullable', 'image', 'mimes:jpeg,jpg,png',],

        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        return view('containers.gestion-eleves.eleves.show-eleve', compact('eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        return view('containers.gestion-eleves.eleves.edit-eleve', compact('eleve'));
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
<<<<<<< HEAD
        if ($request->hasFile('photo')) {

            //verification s'il possede deja une photo
            if ($eleve->photo) {
                $photoPath = $eleve->photo;
                $exists = Storage::disk('public')->exists($photoPath);

                // supprime l'ancienne photo qui a ete trouvé
                if ($exists) {
                    Storage::disk('public')->delete($photoPath);
                }
            }

            $username = Str::slug($request->nom . ' ' . $request->prenom);
            $filename = $username . '.' . time() . '.' . $request->photo->extension();

            $path = $request->file('photo')->storeAs(
                'eleves',
                $filename,
                'public',
            );

            $image = Image::make(public_path("/storage/{$path}"))->fit(100, 100);
            $image->save();
        } else {
            if ($eleve->photo) {
                $path =  $eleve->photo;
            } else {
                $path = '';
            }
        }

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
=======
        $validate = $request->validate([
            'matricule' => 'required|string|min:2|max:30',
            'nom' => 'required|string|min:2|max:30',
            'prenom' => 'required|string|min:2|max:50',
            'date_de_naissance' => 'nullable|date',
            'lieu_de_naissance' => 'nullable|string|min:2|max:50',
            'sexe' => ['required', 'string', 'min:3', 'max:15', new Enum(EnumSexe::class)],
            'nationalite' => 'required|string|min:3|max:30',
            'pere' => 'nullable|string|min:3|max:100',
            'mere' => 'nullable|string|min:3|max:100',
            'tuteur' => 'nullable|string|min:3|max:100',
            'telephone_tuteur' => 'nullable|numeric|digits:9',
            'email_tuteur' => 'nullable|string|email|max:50|unique:eleves',
            'adresse_tuteur' => 'nullable|string|min:3|max:30',
            // 'classe' => ['required', 'numeric', Rule::exists('classes', 'id')],
            'photo' => ['nullable', 'image', 'mimes:jpeg,jpg,png',],
            // 'montant_paye' => ['nullable', 'string', 'min:0',],
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
        ]);

        $eleve->update([
            'matricule' => $request->matricule,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_de_naissance,
            'lieu_naissance' => $request->lieu_de_naissance,
            'sexe' => $request->sexe,
            'nationalite' => $request->nationalite,
            'pere' => $request->pere,
            'mere' => $request->mere,
            'tuteur' => $request->tuteur,
            'telephone_tuteur' => $request->telephone_tuteur,
            'adresse_tuteur' => $request->adresse_tuteur,
            'email_tuteur' => $request->email_tuteur,
            'photo' => $path,
            // 'montant_paye' => $request->montant_paye,
            // 'status' => true,
        ]);

        if ($request->hasFile('photo')) {

            //verification s'il possede deja une photo
            if ($eleve->photo) {
                $photoPath = $eleve->photo;
                $exists = Storage::disk('public')->exists($photoPath);

                // supprime l'ancienne photo qui a ete trouvé
                if ($exists) {
                    Storage::disk('public')->delete($photoPath);
                }
            }

            $username = Str::slug($request->nom . ' ' . $request->prenom);
            $filename = $username . '.' . time() . '.' . $request->photo->extension();

            $path = $request->file('photo')->storeAs(
                'eleves',
                $filename,
                'public',
            );

            $image = Image::make(public_path("/storage/{$path}"))->fit(100, 100);
            $image->save();
        } else {
            if ($eleve->photo) {
                $path =  $eleve->photo;
            } else {
                $path = '';
            }
        }




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
