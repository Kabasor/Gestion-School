@extends('services.layouts.app-landscape', ['title' => "Liste des inscriptions"])
@section('content')

    <p class="text-center mg-t-10" style="margin: 15px 0; color: blue"> <strong>Liste des Etudiants inscrits </strong></p>

    <table id="" class="table table-bordered ">
        <thead>
            <tr style="background-color: #11ABFF; color: #201e1e;">
                <th>N°</th>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Lieu</th>
                <th>Sexe</th>
                <th>Classe</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inscriptions as $inscription)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $inscription->eleve->matricule }}</td>
                    <td>{{ $inscription->eleve->nom }}</td>
                    <td>{{ $inscription->eleve->prenom }}</td>
                    <td>{{ $inscription->eleve->date_naissance->format('d/m/Y') }}</td>
                    <td>{{ $inscription->eleve->lieu_naissance }}</td>
                    <td>{{ $inscription->eleve->sexe }}</td>
                    <td>{{ $inscription->eleve->classe->libelle }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

