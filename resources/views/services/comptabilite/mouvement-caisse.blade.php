@extends('services.layouts.app', ['title' => "Mouvement de la caisse"])
@section('content')

    <h5 class="tc" style="text-decoration: underline">Mouvements de la caisse
        {{ $date_debut ? " Du ". Carbon::createFromDate($date_debut)->format('d/m/Y')  : ""}} {{  $date_fin ? " Au ".Carbon::createFromDate($date_fin)->format('d/m/Y') : " "  }}
    </h5>

    <table class="table table-bordered w" style="font-size: 12px">
        <thead>
            <tr style=" background-color: #11ABFF; color: #272323; ">
                <th>N°</th>
                <th>Date</th>
                <th>Libellé</th>
                <th>Bénéficiaire</th>
                <th>N° Trans</th>
                <th>Débit</th>
                <th>Crédit</th>
                <th>Solde</th>
            </tr>
        </thead>
        @if ($mouvementCaisses)
            <tbody>

                @foreach ($mouvementCaisses as $mouvementCaisse)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mouvementCaisse->created_at->format('d/m/Y')}}</td>
                        <td >{{ Str::upper($mouvementCaisse->libelle) }}</td>
                        <td>{{ $mouvementCaisse->beneficiaire }}</td>
                        <td>{{ $mouvementCaisse->numero_transaction }}</td>
                        <td>{{ format_price_without_money($mouvementCaisse->debit) }}</td>
                        <td>{{ format_price_without_money($mouvementCaisse->credit) }}</td>
                        <td>{{ format_price_without_money(get_caisse_solde_with_id($mouvementCaisse->id)) }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="tx-bold">
                    <td colspan="5" class="text-center">Total mouvements</td>
                    <td>{{ format_price_without_money(get_debit_caisse_between_two_dates($date_debut, $date_fin)) }}</td>
                    <td>{{ format_price_without_money(get_credit_caisse_between_two_dates($date_debut, $date_fin)) }}</td>
                    <td></td>
                </tr>
                <tr class="tx-bold">
                    <td colspan="5" class="text-center">Solde au {{ now()->format('d/m/Y')}}</td>
                    <td></td>
                    <td></td>

                    <td class="price text-end mb-0">{{ format_price_without_money(get_solde_caisse() ) }}</td>

                </tr>
            </tfoot>
        @else
            <tbody>
                @foreach ($mouvementCaissesAll as $mouvementCaisse)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mouvementCaisse->created_at->format('d/m/Y')}}</td>
                        <td >{{ Str::upper($mouvementCaisse->libelle) }}</td>
                        <td>{{ $mouvementCaisse->beneficiaire }}</td>
                        <td>{{ $mouvementCaisse->numero_transaction }}</td>
                        <td>{{ format_price_without_money($mouvementCaisse->debit) }}</td>
                        <td>{{ format_price_without_money($mouvementCaisse->credit) }}</td>
                        <td>{{ format_price_without_money(get_caisse_solde_with_id($mouvementCaisse->id)) }}</td>

                    </tr>
                @endforeach

            </tbody>

            <tfoot>
                <tr class="tx-bold">
                    <td colspan="5" class="text-center">Total mouvements</td>
                    <td>{{ format_price_without_money(get_debit_caisse()) }}</td>
                    <td>{{ format_price_without_money(get_credit_caisse()) }}</td>
                    <td></td>
                </tr>
                <tr class="tx-bold">
                    <td colspan="5" class="text-center">Solde au {{ now()->format('d/m/Y')}}</td>
                    <td></td>
                    <td></td>

                    <td class="price text-end mb-0">{{ format_price_without_money(get_solde_caisse() ) }}</td>

                </tr>
            </tfoot>
        @endif
    </table>

@endsection




