@extends('services.layouts.app', ['title' => "Bulletin de Paye"])
@section('content')

    {{-- <p class="tx-center"> <strong style="text-decoration: underline;">Bulletin N°: {{ now()->format('y').$paiementProfesseur->id }}</strong> </p> --}}
    <p class="tx-center"> <strong style="text-transform: uppercase">Bulletin de salaire</strong> </p>
    <p class="tx-center"> <span style="font-style: italic">Mois de : </span>
        <strong style="text-transform: uppercase; ">
            {{ $paiementProfesseur->mois }} {{ $paiementProfesseur->annee }}
        </strong>
        <p class="tx-center">Numéro bordereau :  <span>{{ $paiementProfesseur->numero_bordelot }}</span></p>
    </p>

    <div class="border">
        <div style="width: 80%; font-size: 15px">
            <p><strong style="margin-right: 47px">Matricule : </strong>    {{ Str::upper($paiementProfesseur->professeur->matricule) }}</p>
            <p><strong style="margin-right: 10px">Nom & Prénom : </strong> {{ fullname($paiementProfesseur->professeur->nom, $paiementProfesseur->professeur->prenom)  }}</p>
            <p><strong style="margin-right: 45px">Téléphone : </strong>    {{ Str::upper($paiementProfesseur->professeur->telephone) }}</p>
            <p><strong style="margin-right: 58px">Fonction : </strong>    Professeur</p>
            <p><strong style="margin-right: 58px">Diplôme : </strong>      {{ Str::upper($paiementProfesseur->professeur->diplome) }}</p>
        </div>
        {{-- <div style="width: 20%;">
            <img src="src="{{ $paiementProfesseur->professeur->photo ? public_path('storage') . '/' . $paiementProfesseur->professeur->photo : public_path('assets/img/faces/3.jpg') }}" alt="" srcset="">
        </div> --}}
    </div>

    <table  class="table table-bordered w" style="font-size: 18px; margin-top: 30px">
        <thead>
            <tr style=" background-color: #9b6e0eda; color: #161616; font-size: 15px">
                <th>N°</th>
                <th>LIBELLE</th>
                <th>MONTANT (GNF)</th>
           </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td >MONTANT </td>
                <td>{{ format_price($paiementProfesseur->salaire_brut) }}</td>
            </tr>
            <tr>
                <td>2</td>
                <td> PRIMES </td>
                <td>{{ format_price($paiementProfesseur->prime) }}</td>
            </tr>
            <tr>
                <td>3</td>
                <td> ACCOMPTES</td>
                <td>{{ format_price($paiementProfesseur->accompte) }}</td>
            </tr>
            <tfoot>
                <tr style="background: #9b6e0eda;">
                    <td colspan="2" style="padding: 7px">TOTAL</td>
                    <td style="padding: 7px">
                        {{ format_price(($paiementProfesseur->salaire_brut + $paiementProfesseur->prime - $paiementProfesseur->accompte) ) }}
                    </td>
                </tr>
            </tfoot>
        </tbody>
    </table>

    <div  style="margin: 50px 40px ;max-width: 600px;">
        <div style="display: inline">
            <p>
                <strong>Le comptable </strong>
                <strong style="float: right">Le Professeur</strong>
            </p>
        </div>
    </div>
@endsection





