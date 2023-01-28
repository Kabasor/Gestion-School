@extends('services.layouts.app-landscape', ['title' => "Liste des Etudiants"])
@section('content')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="text-center">
                <h5 class="text-center">Listes des Etudiants</h5>
                <p> {{ get_last_session()->session }}</p>
            </div>
        </div>
    </div>
    <!-- End Row -->
    	<div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-2 mt-2">Liste des etudiants</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    {{-- <p class="tx-12 text-muted mb-2">Example of Azira Bordered Table.. <a href="">Learn more</a></p> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mg-b-1 text-md-nowrap">
                            <thead>
                                <tr style=" background-color: #11ABFF; color: #201e1e;">
                                    <th >N°</th>
                                    <th >Matricule</th>
                                    <th >Nom</th>
                                    <th >Prénoms</th>
                                    <th >Sexe</th>
                                    <th style="font-size: 12px">Date de Naissance </th>
                                    <th style="font-size: 12px">Lieu de Naissance </th>
                                    <th >Téléphone</th>
                                    <th >Filiation</th>
                                    <th >Département</th>
                                    <th >Niveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etudiants as $etudiant)
                                    <tr>
                                        <th >{{ $loop->iteration }}</th>
                                        <td>{{ $etudiant->matricule }}</td>
                                        <td>{{ $etudiant->nom }}</td>
                                        <td>{{ $etudiant->prenom }}</td>
                                        <td>{{ $etudiant->sexe }}</td>
                                        <td>{{ $etudiant->date_naissance->format('d/m/Y') }}</td>
                                        <td>{{ $etudiant->lieu_naissance }}</td>
                                        <td>{{ $etudiant->telephone }}</td>
                                        <td>{{ $etudiant->pere }} {{ $etudiant->pere && $etudiant->mere ? ' et de ' : ' '}} {{ $etudiant->mere }}</td>
                                        <td>{{ $etudiant->departement->departement }}</td>
                                        <td style="font-size: 9px">{{ $etudiant->niveau->libelle }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- Row -->


@endsection

