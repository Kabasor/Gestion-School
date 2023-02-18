@extends('services.layouts.app-landscape', ['title' => "Liste de reinscriptions"])
@section('content')
    <p class="text-center mg-t-10" style="margin: 15px 0; color: blue"> <strong>Liste des Etudiants réinscrits </strong></p>

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
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reinscriptions as $reinscription)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $reinscription->eleve->matricule }}</td>
                    <td>{{ $reinscription->eleve->nom . '  ' .$reinscription->eleve->prenom }}</td>
                    <td>{{ $reinscription->eleve->prenom }}</td>
                    <td>{{ $reinscription->eleve->date_naissance->format('d/m/Y') }}</td>
                    <td>{{ $reinscription->eleve->lieu_naissance }}</td>
                    <td>{{ $reinscription->eleve->sexe }}</td>
                    <td>{{ $reinscription->eleve->classe->libelle }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

