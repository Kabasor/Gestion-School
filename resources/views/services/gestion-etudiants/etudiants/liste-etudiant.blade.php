@extends('services.layouts.app-landscape', ['title' => "Liste Simple des Etudiants"])
@section('content')
    <p class="text-center mg-t-10" style="margin: 15px 0; color: blue">
        <strong> Liste des @if (Route::is('print.student.new')) nouveau @endif Etudiants </strong>
    </p>

    <table id="" class="table table-bordered " style="font-size: 14px">
        <thead>
            <tr style=" background-color: #11ABFF; color: #201e1e;">
                <th >N°</th>
                <th >Matricule</th>
                <th >Nom</th>
                <th >Prénoms</th>
                <th >Sexe</th>
                <th style="font-size: 12px">Date de Naissance </th>
                <th style="font-size: 12px">Lieu de Naissance </th>
                <th>Téléphone</th>
                {{-- <th >Filiation</th> --}}
                <th>Département</th>
                <th>Niveau</th>
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
                    {{-- <td>{{ $etudiant->pere }} {{ $etudiant->pere && $etudiant->mere ? ' et de ' : ' '}} {{ $etudiant->mere }}</td> --}}
                    <td>{{ $etudiant->departement->departement }}</td>
                    <td style="font-size: 11px">{{ $etudiant->niveau->libelle }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

