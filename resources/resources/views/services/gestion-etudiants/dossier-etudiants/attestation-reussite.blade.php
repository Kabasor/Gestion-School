@extends('services.layouts.app', ['title' => "Attestation reussite"])
@section('content')

    <h3 class="tc">Attestion reussite</h3>
    <p>{{ $attestation }}</p>

    <div style="display: inline; margin: 10px 7px;">
        <p>
            <span style="float: right; font-style: italic; margin-bottom: 10px; margin-right: 20px"> Conakry, le {{ now()->format('d/m/Y')}}</span> <br><br>

            <strong style="margin-left: 30px">Le chef de département </strong>
            <strong style="text-align: center; margin-left: 120px">Le Recteur </strong>
            <strong style="float: right; margin-right: 40px">
                La scolarité
            </strong>
        </p>
    </div> <br>

@endsection




