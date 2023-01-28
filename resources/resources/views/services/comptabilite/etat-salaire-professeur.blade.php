@extends('services.layouts.app-landscape', ['title' => "Etat de salaire des professeurs"])
@section('content')

    {{-- <h5 class="tc" style="text-decoration: underline">Etat de salaires des professeurs
        {{ $date_debut ? " Du ". Carbon::createFromDate($date_debut)->format('d/m/Y')  : ""}} {{  $date_fin ? " Au ".Carbon::createFromDate($date_fin)->format('d/m/Y') : " "  }}

    </h5> --}}
    <h5 class="text-center mb-3" style="text-decoration: underline">
        Etat de salaires des professeurs
    </h5>
    {{-- <h6 class="text-center mb-3">
        Mois :  <strong class="text-center mb-3" style="text-decoration: underline">{{ $mois }}</strong>
    </h6>
    <h6 class="text-center mb-3">
        Département :  <strong class="text-center mb-3" style="text-decoration: underline">{{ $departement->departement }}</strong>
    </h6>
    <h6 class="text-center mb-3">
        Niveau :  <strong class="text-center mb-3" style="text-decoration: underline">{{ $niveau->libelle }}</strong>
    </h6>
    <h6 class="text-center mb-3">
        Module :  <strong class="text-center mb-3" style="text-decoration: underline">{{ $module->module }}</strong>
    </h6> --}}

    <div class="text-center">
        <p><strong style="margin-left: -65px" class="">Mois : </strong>    {{ $mois }}</p>
        <p><strong style="margin-left: -20px">Département: </strong> {{ $departement->departement }}</p>
        <p><strong style="margin-left: -35px">Niveau : </strong>    {{ $niveau->libelle }}</p>
        <p><strong style="margin-left: -45px">Module : </strong>     {{ $module->module }}</p>
    </div>

    <table  class="table table-bordered" style="font-size: 15px;" >
        <thead>
            <tr style="background-color: #11ABFF; color: #201e1e; font-size: 14px; padding: 3px">
                <th>N°</th>
                <th>Matricule</th>
                <th>Noms</th>
                <th>Prénoms</th>
                <th>Département</th>
                <th>Niveau</th>
                <th>Matières</th>
                <th>Mois</th>
                <th>Nb. Heures</th>
                <th>Taux Horaires</th>
                <th>Accomptes</th>
                <th>Primes</th>
                <th>Net à Payer</th>
                {{-- <th>Date</th> --}}
            </tr>
        </thead>

        <tbody>

            @forelse ($etatSalaireProfesseurs as $etatsSalaire)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $etatsSalaire->professeur->matricule }}</td>
                    <td>{{ Str::title($etatsSalaire->professeur->nom) }}</td>
                    <td>{{ Str::title($etatsSalaire->professeur->prenom) }}</td>
                    <td>{{ Str::title($etatsSalaire->departement->departement) }}</td>
                    <td>{{ Str::title($etatsSalaire->niveau->libelle) }}</td>
                    <td>{{ Str::title($etatsSalaire->matiere->nom_de_la_matiere) }}</td>
                    <td>{{ $etatsSalaire->mois }}</td>
                    <td>{{ ($etatsSalaire->nbre_heures) }}</td>
                    <td>{{ format_price($etatsSalaire->taux_horaire) }}</td>
                    <td>{{ format_price($etatsSalaire->accompte) }}</td>
                    <td>{{ format_price($etatsSalaire->prime) }}</td>
                    <td>{{ format_price($etatsSalaire->net_a_payer) }}</td>
                    {{-- <td>{{$etatsSalaire->created_at->format('d/m/Y') }}</td> --}}
                </tr>
            @empty
                <tr>
                    <td>1</td>
                    <td colspan="6">Aucune donnée n'a été trouvé !</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot style="font-weight: bold; font-size: 14px">
            <tr class="tx-bold">
                <td colspan="10" class="text-center" style="background: #fdd10a">Totaux</td>
                <td>{{ format_price(sum_accompte_professeurs($session, $departement, $niveau, $module, $mois)) }}</td>
                <td><strong >{{ format_price(sum_primes_professeurs($session, $departement, $niveau, $module, $mois)) }}</strong></td>
                <td><strong >{{ format_price(sum_net_a_payer_professeurs($session, $departement, $niveau, $module, $mois)) }}</strong></td>
                {{-- <td colspan="1"><strong >{{ format_price(sum_montant_payer_personnel_session_month($session, $mois)) }}</strong></td>
                <td colspan="1"><strong >{{ format_price(sum_montant_payer_personnel_session_month($session, $mois)) }}</strong></td> --}}
            </tr>
        </tfoot>
    </table>

@endsection




