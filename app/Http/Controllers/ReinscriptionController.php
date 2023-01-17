<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Reinscription;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ReinscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = Eleve::whereDoesntHave('reinscriptions', function (Builder $query) {
            $query->where('annee_scolarite_id', get_last_session_id());
        })->get();
        $classes = Classe::with(['niveau'])->oldest()->get();
        $reinscriptions = Reinscription::all();
        return view('containers.gestion-eleves.reinscriptions.reinscription', compact('eleves', 'classes', 'reinscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reinscription  $reinscription
     * @return \Illuminate\Http\Response
     */
    public function show(Reinscription $reinscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reinscription  $reinscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Reinscription $reinscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reinscription  $reinscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reinscription $reinscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reinscription  $reinscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reinscription $reinscription)
    {
        //
    }
}
