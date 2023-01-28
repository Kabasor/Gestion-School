@extends('services.layouts.app-landscape', ['title' => "Fiche de resultat"])
@section('content')

    {{-- <h5 class="tc" style="text-decoration: underline">Rapport Statistiques Journalière
        {{ $date_debut ? " Du ". Carbon::createFromDate($date_debut)->format('d/m/Y')  : ""}} {{  $date_fin ? " Au ".Carbon::createFromDate($date_fin)->format('d/m/Y') : " "  }}
    </h5> --}}

    <table class="table table-bordered w" style="font-size: 14px; max-width: 100%;">
        <thead>
            <tr class="th">
                <th class="border-bottom-0">N°</th>
                <th class="border-bottom-0">Matricule</th>
                <th class="border-bottom-0">Nom & Prénom</th>
                @foreach ($matieres as $matiere)
                    <th>{{ $matiere->nom_de_la_matiere}}</th>
                @endforeach

            </tr>
        </thead>
    <tbody>
        @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $etudiant->matricule }}</td>
                <td>{{ fullname($etudiant->nom, $etudiant->prenom) }}</td>
                @foreach ($matieres as $matiere)
                    <td>
                        @foreach (get_notes_etudiant_matiere($etudiant->id, $matiere->id) as $note)
                            {{ calcul_moyenne($note->note_1, $note->note_2, $note->note_3) }}
                        @endforeach
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
    </table><br><br><br>

   <div style="display: inline; margin: 0 10px;">
        <p>
            <span style="float: right; font-style: italic; margin-bottom: 10px; margin-right: 20px"> Conakry, le {{ now()->format('d/m/Y')}}</span> <br><br>

            <strong style="margin-left: 30px">Le chef de département </strong>
            <strong style="float: right; margin-right: 40px">
                La scolarité
            </strong>
        </p>
    </div>

@endsection
