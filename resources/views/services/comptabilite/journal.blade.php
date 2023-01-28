@extends('services.layouts.app', ['title' => "Statistiques des Paiements"])
@section('content')

    <h5 class="tc" style="text-decoration: underline">Rapport Statistiques
        {{ $date_debut ? " Du ". Carbon::createFromDate($date_debut)->format('d/m/Y')  : ""}} {{  $date_fin ? " Au ".Carbon::createFromDate($date_fin)->format('d/m/Y') : " "  }}
    </h5>

    <table  class="table table-bordered w" style="font-size: 11px; ">
        <thead>
            <tr style=" background-color: #11ABFF; color: #201e1e; font-size: 12px">
                <th class="border-bottom-0">N°</th>
                <th class="border-bottom-0">Date paiement</th>
                <th class="border-bottom-0">Libellé</th>
                <th class="border-bottom-0">Matricule</th>
                <th class="border-bottom-0">Etudiant</th>
                <th class="border-bottom-0">Département</th>
                <th class="border-bottom-0">Niveau</th>
                <th class="border-bottom-0">Montant Payé</th>
                {{-- <th class="border-bottom-0">Montant total</th> --}}
                {{-- <th class="border-bottom-0">Reste</th> --}}

            </tr>
        </thead>

        <tbody>

            @forelse ($historiquePaiements as $historique)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$historique->created_at->format('d/m/Y') }}</td>
                    <td>{{ ($historique->libelle) }}</td>
                    <td>{{ ($historique->etudiant->matricule) }}</td>
                    <td>{{ fullname($historique->etudiant->nom, $historique->etudiant->prenom) }}</td>
                    <td  style="font-size: 11px">{{ ($historique->etudiant->departement->departement) }}</td>
                    <td>{{ ($historique->etudiant->niveau->libelle) }}</td>
                    <td>{{ format_price($historique->montant_paye) }}</td>
                    {{-- <td>{{ format_price($historique->montant_total) }}</td> --}}
                    {{-- <td>{{ format_price($historique->reste) }}</td> --}}
                </tr>
            @empty
                <tr>
                    <td>1</td>
                    <td colspan="">Aucune donnée n'a été trouvé !</td>
                </tr>
            @endforelse
        </tbody>

        <tfoot>
            <tr class="tx-bold " style="font-size: 13px; font-weight: 800">
                <td colspan="7" class="text-center" style="background-color: #ffac11">TOTAL </td>
                <td style="background-color: #ffac11">
                    @if ($date_debut && $date_fin)
                        {{ format_price(get_total_montant_payer_journal_two_dates($date_debut, $date_fin)) }}
                    @else
                        {{ format_price(get_total_montant_payer_journal()) }}
                    @endif
                </td>
            </tr>

        </tfoot>

    </table><br><br><br>

    <div style="display: inline; margin: 50px 10px;">
        <p>
            <span style="float: right; font-style: italic; margin-bottom: 10px; margin-right: 20px;"> Conakry, le {{ now()->format('d/m/Y')}}</span> <br><br>

            <strong style="float: right; margin-right: 40px">
                Le comptable <br><br><br> {{ fullname(get_comptable()->prenom, get_comptable()->nom) }}
            </strong> <br><br><br>
        </p>
    </div>

@endsection




