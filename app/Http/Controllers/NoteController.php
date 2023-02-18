<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Matiere;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $matieres = Matiere::all();
        $classes = Classe::all();
        $eleves = Eleve::all();

        return view('admin.notes.notes',compact('notes','matieres','eleves','classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $note = Note::all();
        $matieres = Matiere::all();
        // $classes = Classe::all();
        $eleves = Eleve::all();

        return view('admin.notes.add-note',compact('note','matieres','eleves'));
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
            'note_1'=>'required|string|min:1|max:20',
            'note_2'=>'required|numeric|min:1|max:20',
            'note_3'=>'required|numeric|min:1|max:20',
            'compos'=>'nullable|numeric|min:1|max:20',
            'eleve_id'=>'nullable|string|min:3|max:100',
            'matiere_id'=>'nullable|string|min:3|max:100',
            // 'classe_id'=>'nullable|string|min:2|max:50',
            'annee_scolarite_id'
        ]);
        $note_1= $request->note_1;
        $note_2= $request->note_2;
        $note_3= $request->note_3;
        $compos= $request->compos;
        // $coefficient= $request->coefficient;
        $new_compos =  (($note_1 + $note_2 + $note_3) + ($compos *1))/4;
// dd($request->coefficient);
        $note=Note::create([
            'note_1'=>$note_1,
            'note_2'=>$note_2,
            'note_3'=>$note_3,
            'compos'=> format_number($new_compos),
            'eleve_id'=> $request->eleve,
            'matiere_id'=> $request->matiere,
            // 'classe_id' =>  $request->classe
            // 'prof_id' =>  $prof->id,
        ]);



        return redirect()->route('note.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {

        $matieres = Matiere::all();
        $eleves = Eleve::all();
        return view('admin.notes.edit-note',compact('note','eleves','matieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
         // dd($request->all());
         $request->validate([
            'note_1'=>'required|string|min:1|max:20',
            'note_2'=>'required|numeric|min:1|max:20',
            'note_3'=>'required|numeric|min:1|max:20',
            'compos'=>'nullable|numeric|min:1|max:20',
            // 'trimestre'=>'nullable|string|min:3|max:100',
            // 'semestre'=>'nullable|string|min:3|max:100',
            // 'user_id'=>'nullable|string|min:3|max:100',
            // 'moyenne_generale'=>'nullable|string|min:3|max:100',
            'eleve_id'=>'nullable|string|min:3|max:100',
            'matiere_id'=>'nullable|string|min:3|max:100',
            // 'classe_id'=>'nullable|string|min:2|max:50',
            'annee_scolarite_id'
        ]);
        $note_1= $request->note_1;
        $note_2= $request->note_2;
        $note_3= $request->note_3;
        $compos= $request->compos;
        // $coefficient= $request->coefficient;
        $new_compos =  (($note_1 + $note_2 + $note_3) + ($compos *1))/4; 

        $note->update([
            'note_1'=>$note_1,
            'note_2'=>$note_2,
            'note_3'=>$note_3,
            'compos'=> format_number($new_compos),
            'eleve_id'=> $request->eleve,
            'matiere_id'=> $request->matiere,
            // 'classe_id' =>  $request->classe
            // 'prof_id' =>  $prof->id,
        ]);

        return redirect()->route('note.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index');
    }
}
