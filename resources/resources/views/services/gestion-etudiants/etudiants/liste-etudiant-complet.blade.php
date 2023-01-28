@extends('services.layouts.app-landscape', ['title' => "Liste des Complet des Etudiants"])
@section('content')
    <p class="text-center mg-t-10" style="margin: 15px 0; color: blue"> <strong>Liste des complet des Etudiants </strong></p>

    <table id="" class="table table-bordered" style="max-width: 98%">
        <thead>
            <tr style=" background-color: #11ABFF; color: #201e1e;">
                {{-- <th >N°</th>
                <th >Matricule</th>
                <th >Nom</th>
                <th >Prénoms</th>
                <th >Sexe</th>
                <th style="font-size: 11px">Date de Naissance </th>
                <th style="font-size: 11px">Lieu de Naissance </th>
                <th >Téléphone</th>
                <th >Filiation</th>
                <th >Niveau</th>
                <th >Département</th>
                <th >Département</th>
                <th >Département</th>
                <th >Département</th>
                <th >Département</th>
                <th >Département</th>
                <th >Département</th> --}}

                <th >N°</th>
                <th >Matricule</th>
                <th >Nom </th>
                <th >Prénom </th>
                <th >Email</th>
                <th >Programme</th>
                <th >Département</th>
                <th style="font-size: 11px">Niveau</th>
                <th style="font-size: 11px">Date de Naissance </th>
                <th style="font-size: 11px">Lieu de Naissance </th>
                <th >Situation Matri.</th>
                <th >Téléphone</th>
                <th >Nationalité</th>
                <th >Sexe</th>
                <th >Adresse</th>
                <th >Filiation</th>
                {{-- <th >Tuteur</th>
                <th >Pv</th>
                <th >Lycée</th>
                <th >Session</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($etudiants as $etudiant)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $etudiant->matricule }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td>{{ $etudiant->programme->programme }}</td>
                    <td>{{ $etudiant->departement->departement }}</td>
                    <td style="font-size: 10px">{{ $etudiant->niveau->libelle }}</td>
                    <td>{{ $etudiant->date_naissance->format('d/m/Y') }}</td>
                    <td>{{ $etudiant->lieu_naissance }}</td>
                    <td>{{ $etudiant->situation_matrimoniale }}</td>
                    <td>{{ $etudiant->telephone }}</td>
                    <td>{{ $etudiant->nationalite }}</td>
                    <td>{{ $etudiant->sexe }}</td>
                    <td>{{ $etudiant->adresse }}</td>
                    <td style="font-size: 11px">{{ $etudiant->pere }} {{ $etudiant->pere && $etudiant->mere ? ' et de ' : ' '}} {{ $etudiant->mere }}</td>
                    {{-- <td>{{ $etudiant->tuteur }}</td>
                    <td>{{ $etudiant->pv }}</td>
                    <td>{{ $etudiant->lycee }}</td>
                    <td>{{ $etudiant->session_bac }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

