@extends('services.layouts.app', ['title' => "Bulletin de Paye"])
@section('content')

    {{-- <p>en lettre : <strong>{{ NumConvert::word(format_price_with_out_type_money($paiementProfesseur->montant_payer)) }}</strong> </p> --}}

    <p class="tx-center"> <strong style="text-transform: uppercase">Bulletin de salaire</strong> </p>
    <p class="tx-center"> <span style="font-style: italic">Mois de : </span>
        <strong style="text-transform: uppercase; ">
            {{ $paiementPersonnel->mois }} {{ $paiementPersonnel->annee }}
        </strong>
        <p class="tx-center">Numéro bordereau :  <span>{{ $paiementPersonnel->numero_bordelot }}</span></p>
    </p>

    <div class="border">
        <div style="width: 80%; font-size: 15px">
            <p><strong style="margin-right: 47px">Matricule : </strong>    {{ Str::upper($paiementPersonnel->personnel->matricule) }}</p>
            <p><strong style="margin-right: 10px">Nom & Prénom : </strong> {{ fullname($paiementPersonnel->personnel->nom, $paiementPersonnel->personnel->prenom)  }}</p>
            <p><strong style="margin-right: 45px">Téléphone : </strong>    {{ Str::upper($paiementPersonnel->personnel->telephone) }}</p>
            <p><strong style="margin-right: 58px">Fonction : </strong>     {{ Str::upper($paiementPersonnel->personnel->fonction) }}</p>
            <p><strong style="margin-right: 58px">Diplôme : </strong>      {{ Str::upper($paiementPersonnel->personnel->diplome) }}</p>
        </div>
        {{-- <div style="width: 20%;">
            <img src="src="{{ $paiementPersonnel->personnel->photo ? public_path('storage') . '/' . $paiementPersonnel->personnel->photo : public_path('assets/img/faces/3.jpg') }}" alt="" srcset="">
        </div> --}}
    </div>

    <table  class="table table-bordered w" style="font-size: 18px; margin-top: 30px">
        <thead>
            <tr style=" background-color: #99865d; color: #161616; font-size: 15px">
                <th>N°</th>
                <th>LIBELLE</th>
                <th>MONTANT (GNF)</th>
           </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td >SALAIRE DE BASE</td>
                <td>{{ format_price($paiementPersonnel->personnel->salaire) }}</td>
            </tr>
            <tr>
                <td>2</td>
                <td> PRIMES </td>
                <td>{{ format_price($paiementPersonnel->prime) }}</td>
            </tr>
            <tr>
                <td>3</td>
                <td> ACCOMPTES</td>
                <td>{{ format_price($paiementPersonnel->accompte) }}</td>
            </tr>
            <tfoot>
                <tr style="background: #99865d;">
                    <td colspan="2" style="padding: 7px">TOTAL</td>
                    <td style="padding: 7px">{{ format_price(($paiementPersonnel->personnel->salaire + $paiementPersonnel->prime - $paiementPersonnel->accompte))}}</td>
                </tr>
            </tfoot>
        </tbody>
    </table>

    <div  style="margin: 50px 40px ;max-width: 600px;">
        <div style="display: inline">
            <p style="">
                <strong>Le comptable </strong>
                <strong style="float: right">L'Employé</strong>
            </p>

        </div>
    </div>
@endsection



