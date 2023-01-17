@extends('services.layouts.app', ['title' => "Mouvement de la banque"])
@section('content')

    <h5 class="tc" style="text-decoration: underline">Mouvements de la banque
        {{ $date_debut ? " Du ". Carbon::createFromDate($date_debut)->format('d/m/Y')  : ""}} {{  $date_fin ? " Au ".Carbon::createFromDate($date_fin)->format('d/m/Y') : " "  }}
    </h5>

    <table class="table table-bordered w" style="font-size: 12px">
        <thead>
            <tr style=" background-color: #11ABFF; color: #201e1e; font-size: 11px">
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
        @if ($mouvementBanques)
            <tbody>

                @foreach ($mouvementBanques as $mouvementBanque)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mouvementBanque->created_at->format('d/m/Y')}}</td>
                        <td >{{ Str::upper($mouvementBanque->libelle) }}</td>
                        <td>{{ $mouvementBanque->beneficiaire }}</td>
                        <td>{{ $mouvementBanque->numero_transaction }}</td>
                        <td>{{ format_price_without_money($mouvementBanque->debit) }}</td>
                        <td>{{ format_price_without_money($mouvementBanque->credit) }}</td>
                        <td>{{ format_price_without_money(get_banque_solde_with_id($mouvementBanque->id)) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="tx-bold">
                    <td colspan="5" class="text-center">Total mouvements</td>
                    <td>{{ format_price_without_money(get_debit_banque_between_two_dates($date_debut, $date_fin)) }}</td>
                    <td>{{ format_price_without_money(get_credit_banque_between_two_dates($date_debut, $date_fin)) }}</td>
                    <td></td>
                </tr>
                <tr class="tx-bold">
                    <td colspan="5" class="text-center">Solde au {{ now()->format('d/m/Y')}}</td>
                    <td></td>
                    <td></td>
                    <td>{{ format_price_without_money(get_solde_banque() ) }}</td>
                </tr>
            </tfoot>

        @else
            <tbody>

                @foreach ($mouvementBanquesAll as $mouvementBanque)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mouvementBanque->created_at->format('d/m/Y')}}</td>
                        <td >{{ Str::upper($mouvementBanque->libelle) }}</td>
                        <td>{{ $mouvementBanque->beneficiaire }}</td>
                        <td>{{ $mouvementBanque->numero_transaction }}</td>
                        <td>{{ format_price_without_money($mouvementBanque->debit) }}</td>
                        <td>{{ format_price_without_money($mouvementBanque->credit) }}</td>
                        <td>{{ format_price_without_money(get_banque_solde_with_id($mouvementBanque->id)) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="tx-bold">
                    <td colspan="5" class="text-center">Total mouvements</td>
                    <td>{{ format_price_without_money(get_debit_banque()) }}</td>
                    <td>{{ format_price_without_money(get_credit_banque()) }}</td>
                    <td></td>
                </tr>
                <tr class="tx-bold">
                    <td colspan="5" class="text-center">Solde au {{ now()->format('d/m/Y')}}</td>
                    <td></td>
                    <td></td>
                    <td>{{ format_price_without_money(get_solde_banque() ) }}</td>
                </tr>
            </tfoot>
        @endif
    </table>



@endsection




