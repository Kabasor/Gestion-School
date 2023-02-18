<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <meta name='viewport'
          content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="Description"
          content="Gestion Universite">
    <meta name="Author"
          content="Mamadou_saliou_bah">
    <meta name="Keywords"
          content="Gestion Universite" />
    <meta http-equiv="Content-Type"
          content="text/html; charset=utf-8" />

    <!-- PAGE TITLE HERE -->
    <title>{{ page_title($title ?? '') }}</title>

    {{-- <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon"/> --}}

    <!-- Bootstrap css -->
    <link href="{{ public_path('assets/plugins/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet"  />

    <!--- Icons css --->
    {{-- <link href="{{ public_path('assets/css/icons.css') }}" rel="stylesheet"> --}}

    <!--- Style css --->
    {{-- <link href="{{ public_path('assets/css/style.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ public_path('assets/css/plugins.css') }}" rel="stylesheet"> --}}

    <!--- Icons css --->
    {{-- <link href="{{ public_path('assets/css/icons.css') }}" rel="stylesheet"> --}}

    <style>
        table {
            border-collapse: collapse;
            text-align: center;
            font-size: 14px;
        }



        .table td, .table th {
            border: 1px solid black;
        }
        hr { background-color: rgb(0, 0, 0);  border: 0; height: 5px; border-radius: 5px; margin-top: -5px }
        .th {
             background-color: #11ABFF; color: #201e1e; font-size: 13px
        }
        /* .arabe { font-family: DejaVu ; } */
    </style>


</head>

</body>
    <header style="margin-bottom: 30px; ">

        <table style="margin-top: -30px;">
            <tr>
                <td style="width: 30px; vertical-align: top">
                    <img src="{{ public_path('logo/drapeau.png') }}" width="50px" >
                </td>
                <td style="350px">
                    <div style="margin-left: -35px">
                        <h6> {{ config('universite.republique') }} </h6>
                        <p >
                            <span style="color: red"> Travail </span> -
                            <span style="color: rgb(255, 217, 0)"> Justice </span> -
                            <span style="color: green"> Solidarité </span> <br>
                            <span >-----------------------------</span>
                        </p>
                    </div>
                    <p style="max-width: 250px;">{{ config('universite.ministere') }}</p>
                    <h6 class="text-primary text-uppercase" style="color: #11ABFF">{{ config('universite.name') }}</h6>
                </td>
                <td style="width: 375px">
                    <p style="margin-top: -40px"><img src="{{ public_path('arabe/bismillah.png') }}" alt="" width="130"></p>
                    <img src="{{ public_path('logo/LOGO.png') }}" alt="" width="80">
                </td>
                <td style="400px">
                    <div style="margin-left: -15px">
                        <h6> <img src="{{ public_path('arabe/guinee-1.png') }}" alt="" width="110"> </h6>
                        <p >
                            <img src="{{ public_path('arabe/amale.png') }}" alt="" width="100"> <br>
                            {{-- <span style="color: red"> Travail </span> -
                            <span style="color: rgb(255, 217, 0)"> Justice </span> -
                            <span style="color: green"> Solidarité </span> <br> --}}
                            <span >-----------------------------</span>
                        </p>
                    </div>
                    <p style="max-width: 300px;">
                        <img src="{{ public_path('arabe/ministere.png') }}" alt="" width="200">
                    </p>
                    <h6 class="text-primary text-uppercase" style="color: #11ABFF">
                        <img src="{{ public_path('arabe/uni-1.png') }}" alt="" width="100">
                    </h6>
                </td>
                <td style="width: 80px; vertical-align: top">
                    <img src="{{ public_path('logo/drapeau.png') }}" width="50px" >
                </td>

            </tr>

        </table>
        <hr style="background-color: rgb(0, 0, 0)">
    </header>
    <p class="text-center" style="font-size: 13px; margin-top: -5px">
        <strong style="color: #11ABFF">Année Scolaire : </strong> {{ get_last_session()->session }}
    </p>

    @yield('content')

<body>

</html>
