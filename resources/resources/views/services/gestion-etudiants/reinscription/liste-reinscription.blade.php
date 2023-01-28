@extends('services.layouts.app-landscape', ['title' => "Liste de reinscriptions"])
@section('content')
    <p class="text-center mg-t-10" style="margin: 15px 0; color: blue"> <strong>Liste des Etudiants réinscrits </strong></p>

    <table id="" class="table table-bordered ">
        <thead>
            <tr style="background-color: #11ABFF; color: #201e1e;">
                <th >N° </th>
                <th >Matricule</th>
                <th >Nom & Prénom</th>
                {{-- <th >Email</th> --}}
                <th >Téléphone</th>
                <th >Programme</th>
                <th >Département</th>
                <th >Niveau</th>
                {{-- <th >Adresse</th> --}}
                <th >Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reinscriptions as $reinscription)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{$reinscription->etudiant->matricule }}</td>
                    <td>{{ $reinscription->etudiant->nom . '  ' .$reinscription->etudiant->prenom }}</td>
                    {{-- <td>{{$reinscription->etudiant->email }}</td> --}}
                    <td>{{$reinscription->etudiant->telephone }}</td>
                    <td>{{$reinscription->etudiant->programme->programme }}</td>
                    <td>{{$reinscription->etudiant->departement->departement }}</td>
                    <td>{{$reinscription->etudiant->niveau->libelle }}</td>
                    {{-- <td>{{$reinscription->etudiant->adresse }}</td> --}}
                    <td>{{$reinscription->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

