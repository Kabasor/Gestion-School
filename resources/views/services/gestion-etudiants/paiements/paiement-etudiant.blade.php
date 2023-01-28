{{-- @for ($i = 1; $i <= 2; $i++) --}}
    @extends('services.layouts.app', ['title' => "Paiement Etudiant"])
    @section('content')
        <p class="tx-center" style="margin-top: -5px">
            <strong style="text-decoration: underline; margin-top: -5px" >Reçu N°: {{ now()->format('y').$paiement->id }}</strong>
            {{-- <h6 class="tx-center" style="text-decoration: underline; margin-top: -5px">Informations de l'étudiant</h6> --}}
        </p>
        <div class="border" style="font-size: 11px; margin-top: -5px">
            <div style="width: 95%; ">
                <p><strong style="margin-right: 50px">Matricule : </strong>     {{ Str::upper($paiement->etudiant->matricule) }}</p>
                <p><strong style="margin-right: 15px">Nom & Prénom : </strong> {{ fullname($paiement->etudiant->nom, $paiement->etudiant->prenom)  }}</p>
                <p><strong style="margin-right: 46px">Téléphone : </strong>    {{ Str::upper($paiement->etudiant->telephone) }}</p>
                <p><strong style="margin-right: 39px">Programme : </strong>    {{ Str::upper($paiement->etudiant->programme->programme) }}</p>
                <p><strong style="margin-right: 60px">Facultés : </strong>    {{ Str::upper($paiement->etudiant->faculte->faculte) }}</p>
                <p><strong style="margin-right: 34px">Département : </strong>    {{ Str::upper($paiement->etudiant->departement->departement) }}</p>
                <p><strong style="margin-right: 70px">Niveau : </strong>    {{ Str::upper($paiement->niveau->libelle) }}</p>
            </div>
        </div>
            {{-- <h6 class="tx-center" style="text-decoration: underline; margin-bottom: 2px">Informations sur le paiement</h6> --}}

        <div class="border" style="font-size: 11px; margin-top: 3px">
            <div style="width: 95%; ">
                <p><strong style="margin-right: 38px">Libellé : </strong>     {{ Str::title($paiement->libelle) }}</p>
                <p><strong style="margin-right: 10px">Montant total à payer : </strong> {{ format_price($paiement->montant_total ) }}</p>
                <p><strong style="margin-right: 42px">Montant payé : </strong> {{ format_price($paiement->montant_payer)  }}</p>
                <p><strong style="margin-right: 46px">Reste à payer : </strong>    {{ format_price($paiement->reste) }}</p>
                <p><strong style="margin-right: 46px">Pourcentage  : </strong>    {{format_percent($paiement->pourcentage) }}</p>
            </div>

            <div style="display: inline; margin: 0 10px;">
                <p>
                    <span style="float: right; font-style: italic; margin-bottom: 10px; margin-right: 20px"> Conakry, le {{ now()->format('d/m/Y')}}</span> <br><br>
                    
                    <strong style="margin-left: 30px">L'étudiant(e) </strong>
                    <strong style="float: right; margin-right: 40px">
                        Le comptable
                    </strong>
                </p>
            </div> <br>
        </div>

    @endsection

{{-- @endfor --}}


