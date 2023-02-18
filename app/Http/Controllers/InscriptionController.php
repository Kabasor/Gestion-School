<?php

namespace App\Http\Controllers;

use App\Enums\EnumSexe;
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Inscription;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptions = Inscription::AnneeScolariteId()->latest()->get();
        $classes = Classe::with(['niveau'])->oldest()->get();
        return view('containers.gestion-eleves.inscriptions.liste-inscription', compact('classes', 'inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscriptions = Inscription::AnneeScolariteId()->latest()->get();
        $classes = Classe::with(['niveau'])->oldest()->get();
        return view('containers.gestion-eleves.inscriptions.add-inscription', compact('classes', 'inscriptions'));
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
            'matricule' => 'required|string|min:2|max:30',
            'nom' => 'required|string|min:2|max:30',
            'prenom' => 'required|string|min:2|max:50',
            'date_naissance' => 'nullable|string',
            'lieu_naissance' => 'nullable|string|min:2|max:50',
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
            // 'montant_paye' => ['nullable', 'string', 'min:0',],
        ]);
        // dd($request->all());

        if ($request->hasFile('photo')) {
            $username = Str::slug($request->nom . ' ' . $request->prenom);
            $filename = $username . '.' . time() . '.' . $request->photo->extension();

            $path = $request->file('photo')->storeAs(
                'eleves',
                $filename,
                'public',
            );

            $image = Image::make(public_path("/storage/{$path}"))->fit(150, 150);
            $image->save();
        } else {
            $path = '';
        }


        $eleve = Eleve::create([
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
            // 'montant_paye'=>$montant_paye,
            // 'nouveau' => true,
            'status' => true,
        ]);

        $inscription = $eleve->inscription()->create([
            // 'libelle' => $libelle,
            // 'status' => false,
            // 'montant_inscription' => $frais_ins,
            // 'montant' => $total_inscription_scolarite,
            // 'montant_paye' => $montant_paye,
            // 'reste' => ($total_inscription_scolarite - $montant_paye),
            // 'pourcentage' => ($montant_paye / $total_inscription_scolarite),
        ]);
        $fullname = $eleve->prenom . '-'. $eleve->nom;

        Alert::success('Félicitation', "Inscription de l eleve{$fullname} effectuée avec succès !");

        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
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
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
         $inscription->delete();
         return redirecte()->route('inscription.index');
    }


    /**
     * print
     *
     * @return void
     */
    public function print()
    {
        $inscriptions = Inscription::AnneeScolariteId()->latest()->get();
        // dd($inscriptions);
        $pdf = Pdf::loadView('services.gestion-etudiants.inscription.liste-inscription', compact('inscriptions'));
        // (Optional) Setup the paper size and orientation
        $pdf->setPaper('A4', 'landscape');


        return $pdf->stream('liste-inscription');
    }
}
