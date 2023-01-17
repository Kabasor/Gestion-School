@extends('services.layouts.app', ['title' => "Liste de accomptes"])
@section('content')

    <h4 class="tc" style="text-decoration: underline">Liste des accomptes des professeurs de ce mois
        {{-- {{ $date_debut ? " Du ". Carbon::createFromDate($date_debut)->format('d/m/Y')  : ""}} {{  $date_fin ? " Au ".Carbon::createFromDate($date_fin)->format('d/m/Y') : " "  }} --}}
    </h4>

    <table class="table table-bordered" style="font-size: 15px; width: 100%">
        <thead>
            <tr style=" background-color: #11ABFF; color: #201e1e; font-size: 13px">
                <th>N°</th>
                <th>Matricule</th>
                <th>Nom & Prénom </th>
                <th>Mois </th>
                <th>Montant </th>
                <th>Date </th>
            </tr>
        </thead>

        <tbody>

            @forelse ($accompte_professeurs as $accompte_professeur)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $accompte_professeur->professeur->matricule }}</td>
                    <td>{{ fullname($accompte_professeur->professeur->nom, $accompte_professeur->professeur->prenom) }}</td>
                    <td>{{ $accompte_professeur->mois }}</td>
                    <td>{{ format_price($accompte_professeur->montant) }}</td>
                    <td>{{ ($accompte_professeur->created_at->format('d/m/Y')) }}</td>
                </tr>
            @empty
                <tr>
                    <td>1</td>
                    <td colspan="6">Aucune donnée n'a été trouvé !</td>
                </tr>
            @endforelse
        </tbody>

    </table>

    <div style="margin: 50px 40px; max-width: 600px;">
        <span style="float: right; font-style: italic; margin-bottom: 10px; margin-right: 20px"> Conakry, le {{ now()->format('d/m/Y')}}</span> <br><br>
        <div style="display: inline">
            <p style="">
                <strong style="float: right">Le comptable <br><br><br> {{ fullname(get_comptable()->prenom, get_comptable()->nom) }}</strong>
            </p>
        </div>
    </div>

@endsection




