@for ($i = 1; $i <= 2; $i++)
    @extends('services.layouts.app', ['title' => "Liste des inscriptions"])
    @section('content')

        <p class="tx-center"> <strong style="text-decoration: underline;">Reçu N°: {{ now()->format('y').$inscription->id }}</strong> </p>
        {{-- <p class="text-center"> Année Universitaire : {{ get_last_session()->session }}</p> --}}

       <table style="margin-top: 20px; font-size: 9px">
            <tr>
                <td style="width: 200px">
                    <p>Etudiant{{ $inscription->etudiant->sexe  === User::FEMME ? 'e' : '' }} :
                        <strong>{{ Str::upper($inscription->etudiant->nom) }} {{ Str::upper($inscription->etudiant->prenom) }}</strong>
                    </p>
                </td>
                <td style="width: 200px"></td>
                <td style="width: 300px;">
                    <p style="margin-left: -80px">Année Universitaire : <strong>{{ ($inscription->session->session) }}</strong> </p>
                </td>
            </tr>
            <tr>
                <td style="width: 200px;">
                    <p style="margin-left: -70px">Matricule : <strong> {{ Str::upper($inscription->etudiant->matricule) }} </strong></p>
                </td>
                <td style="width: 200px"></td>
                <td style="width: 300px;">
                    <p style="">Département : <strong >{{ ($inscription->etudiant->departement->departement) }}</strong> </p>
                </td>
            </tr>
            <tr>
                <td style="width: 100px;">
                    <p style="margin-left: -65px">Téléphone : <strong >{{ ($inscription->etudiant->telephone) }}</strong> </p>
                </td>
                <td style="width: 200px"></td>
                <td style="width: 100px;">
                    <p style="margin-left: -130px">Niveau : <strong >{{ ($inscription->etudiant->niveau->libelle) }}</strong> </p>
                </td>
            </tr>
            <tr>
                <td style="width: 100px;">
                    <p style="margin-left: -130px">Adresse : <strong >{{ ($inscription->etudiant->adresse) }}</strong> </p>
                </td>
                <td style="width: 200px"></td>
                <td style="width: 100px;">
                    <p style="margin-left: 2px">Faculté : <strong >{{ ($inscription->etudiant->faculte->faculte) }}</strong> </p>
                </td>
            </tr>
            <tr>
                <td style="width: 100px;">
                    {{-- <p style="margin-left: -130px">Adresse : <strong >{{ ($inscription->etudiant->adresse) }}</strong> </p> --}}
                </td>
                <td style="width: 200px"></td>
                <td style="width: 100px;">
                    <p style="margin-left: -30px">Date de paiement : <strong >{{ ($inscription->created_at->format('d/m/Y')) }} à {{ ($inscription->created_at->format('H:i'))  }} mn</strong> </p>
                </td>
            </tr><br>
            <tr>
                <td style="width: 100px;">
                    <p>Détails Paiement : <strong >{{ ($inscription->libelle) }}</strong> </p>
                </td>
            </tr>
            <tr>
                <td style="width: 78px; background: rgb(241, 239, 239); border-radius: 3px;" >
                    <p style="padding-top: 5px; margin-right: 10px">Montant Payé : <strong >{{ format_price($inscription->montant_payer) }}</strong> </p>
                </td>
                <td style="width: 78px; background: rgb(240, 240, 240); border-radius: 3px;" >
                    <p style="padding-top: 8px; ">Reste à Payé : <strong >{{ format_price($inscription->montant_payer) }}</strong> </p>
                </td>
                <td style="width: 78px; background: rgb(240, 240, 240); border-radius: 3px;" >
                    <p style="padding-top: 5px">Pourcentage : <strong >{{ format_percent($inscription->poucentage) }}</strong> </p>
                </td>
            </tr>
            <tr>
                <td style="width: 80px">
                    <p>en lettre : <strong>{{ NumConvert::word(format_price_with_out_type_money($inscription->montant_payer)) }}</strong> </p>
                </td>
            </tr>
            <tr>
                <td style="width: 50%;  margin-top: 20px">
                    <strong>ETUDIANT(E)</strong>
                </td>
                <td style="width: 50%;">

                </td>
                <td style="width: 50%;  margin-top: 20px">
                    <p style="font-style: italic"> Conakry, le {{ now()->format('d/m/Y')}}</p>
                    <strong style="margin-bottom: 30px">Comptable</strong>
                </td>
            </tr>
            @for ($i = 0; $i < 15; $i++)
            <tr><td></td></tr>
            @endfor
            <tr>
                <td style="width: 50%;  margin-top: 50px">
                  <strong>{{ Str::upper($inscription->etudiant->nom) }} {{ Str::upper($inscription->etudiant->prenom) }}</strong>
                </td>
                <td style="width: 50%;">

                </td>
                <td style="width: 50%;  margin-top: 50px">
                    <strong>{{ Str::upper($inscription->etudiant->nom) }} {{ Str::upper($inscription->etudiant->prenom) }}</strong>
                </td>
            </tr>
       </table>
    @endsection

@endfor


