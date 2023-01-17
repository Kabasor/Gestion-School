@extends('services.layouts.app-landscape', ['title' => "Fiche de note"])
@section('content')

    {{-- <h5 class="tc" style="text-decoration: underline">Rapport Statistiques Journalière
        {{ $date_debut ? " Du ". Carbon::createFromDate($date_debut)->format('d/m/Y')  : ""}} {{  $date_fin ? " Au ".Carbon::createFromDate($date_fin)->format('d/m/Y') : " "  }}
    </h5> --}}

    <p class="text-center"> <strong style="text-transform: uppercase">Fiche de notation semestrielle</strong> </p>

    <div class="" style="margin-bottom: 7px;">
        <div style="width: 80%; font-size: 14px">
            <p><strong style="margin-right: 47px">Faculté : </strong> {{ Str::upper($departement->faculte->faculte) }}  </p>
            <p><strong style="margin-right: 20px">Programme : </strong> {{ Str::upper($departement->programme->programme) }}  </p>
            <p><strong style="margin-right: 16px">Département : </strong> {{ Str::upper($departement->departement) }}  </p>
            <p>
                <strong style="margin-right: 55px">Niveau : </strong> {{ Str::upper($niveau->libelle) }}
                <strong style="margin-left: 275px">Module : </strong> {{ Str::upper($module->module) }}
                <strong style="float: right">Semestre :  </strong>
            </p>
            <p>
                <strong style="margin-right: 50px">Prosseur : </strong> 
            </p>
            <p>
                <strong style="margin-right: 50px">Matière : </strong> {{ Str::upper($matiere->nom_de_la_matiere) }}
            </p>
            {{-- <p>
                <strong style="margin-right: 50px">Module : </strong> {{ Str::upper($module->module) }}
            </p> --}}
        </div>

    </div>

    <table  class="table table-bordered w" style="font-size: 14px; ">
        <thead>
            <tr class="th" style="font-size: 16px; padding: 3px 0">
                <th>N°</th>
                <th>Matricule</th>
                <th>Nom </th>
                <th>Prénom</th>
                <th>Matière</th>
                <th>Eva 1</th>
                <th>Eva 2</th>
                <th>Eva 3</th>
                <th>Moyenne Générale</th>
                <th>Observation</th>
                <th>2 <sup>ième</sup>Session</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($notes as $note)
                <tr style="font-size: 14px">
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $note->etudiant->matricule}}</td>
                    <td>{{ $note->etudiant->nom}}</td>
                    <td>{{ $note->etudiant->prenom}}</td>
                    <td>{{ $note->matiere->nom_de_la_matiere}}</td>
                    <td>{{ $note->note_1 }}</td>
                    <td>{{ $note->note_2 }}</td>
                    <td>{{ $note->note_3 }}</td>
                    <td>{{ calcul_moyenne($note->note_1, $note->note_2, $note->note_3) }}</td>
                    <td></td>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td>1</td>
                    <td colspan="6">Aucune donnée n'a été trouvé !</td>
                </tr>
            @endforelse
        </tbody>

    </table><br><br><br>

    <div style="display: inline; margin: 0 10px;">
        <p>
            <span style="float: right; font-style: italic; margin-bottom: 10px; margin-right: 20px"> Conakry, le {{ now()->format('d/m/Y')}}</span> <br><br>

            <strong style="margin-left: 30px">Le Professeur </strong>
            <strong class="text-center" style="text-align: center; margin-left: 300px">Le chef de département </strong>
            <strong style="float: right; margin-right: 40px">
                La scolarité
            </strong>
        </p>
    </div>

@endsection




