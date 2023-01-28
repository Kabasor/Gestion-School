@extends('services.layouts.app-landscape', ['title' => "Etat de salaire Personnels"])
@section('content')

    <h5 class="text-center mb-3" style="text-decoration: underline">Etat de salaires du personnels du mois de {{ $mois }}
        {{-- {{ $date_debut ? " Du ". Carbon::createFromDate($date_debut)->format('d/m/Y')  : ""}} {{  $date_fin ? " Au ".Carbon::createFromDate($date_fin)->format('d/m/Y') : " "  }} --}}
    </h5>

    <table id="" class="table table-bordered ">
        <thead>
            <tr style="background-color: #11ABFF; color: #201e1e; font-size: 17px">
                <th>N°</th>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Mois</th>
                <th>Salaires</th>
                <th>Accomptes</th>
                <th>Primes</th>
                <th>Net à Payer</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($etatSalairePersonnels as $etatsSalaire)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $etatsSalaire->personnel->matricule }}</td>
                    <td>{{ Str::title($etatsSalaire->personnel->nom) }}</td>
                    <td>{{ Str::title($etatsSalaire->personnel->prenom) }}</td>
                    <td>{{ $etatsSalaire->mois }}</td>
                    <td>{{ format_price($etatsSalaire->salaire) }}</td>
                    <td>{{ format_price($etatsSalaire->accompte) }}</td>
                    <td>{{ format_price($etatsSalaire->prime) }}</td>
                    <td>{{ format_price($etatsSalaire->net_a_payer) }}</td>

                </tr>
            @empty
                <tr>
                    <td>1</td>
                    <td colspan="6">Aucune donnée n'a été trouvé !</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot style="font-weight: bold; font-size: 17px">
            <tr class="tx-bold">
                <td colspan="5" class="text-center" style="background: #fdd10a">Total Salaires</td>
                <td>{{ format_price(sum_salaire_personnel()) }}</td>
                <td><strong >{{ format_price(sum_accompte_payer_personnel_session_month($session, $mois)) }}</strong></td>
                <td><strong >{{ format_price(sum_prime_payer_personnel_session_month($session, $mois)) }}</strong></td>
                <td colspan="1"><strong >{{ format_price(sum_montant_payer_personnel_session_month($session, $mois)) }}</strong></td>
            </tr>
        </tfoot>

    </table>

@endsection




