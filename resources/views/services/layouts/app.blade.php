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

    <style>
        table {
            border-collapse: collapse;
            text-align: center;
            font-size: 14px;
        }

        .table td, .table th {
            border: 1px solid black;
        }

        .tx-center {
            text-align: center;
        }
        .w {
            width: 100%;
        }
        .tc {
            text-align: center
        }
        .border {
            border: 1px solid #000;
            border-radius: 3px;
            padding: 5px
        }
        hr { background-color: rgb(0, 0, 0);  border: 0; height: 5px; border-radius: 5px; margin-top: -5px }
        .th {
             background-color: #11ABFF; color: #201e1e; font-size: 13px
        }
    </style>

</head>

<body >
    {{-- <header> --}}

        <table style="margin-top: -40px">
            <tr>
                <td style="width: 30px; vertical-align: top">
                    <img src="{{ public_path('logo/drapeau.png') }}" width="35px">
                </td>
                <td style="800px; vertical-align: 100%">
                    <strong style="display: block; font-size: 12px; margin-bottom: 3px">
                        {{ config('universite.republique') }}
                    </strong>
                    <span style="font-size: 10px; ">
                        <span style="color: red; margin-left: 10px"> Travail </span> -
                        <span style="color: rgb(255, 217, 0)"> Justice </span> -
                        <span style="color: green"> Solidarité </span>
                    </span>
                    <span style="margin: 5px 1px">-----------------------------</span>

                    <p style="max-width: 325px; font-size: 11px;">
                        {{ config('universite.ministere') }}
                    </p>
                    <h4 style="color: #1865d8; font-size: 11.4px; margin-top: -3px; text-transform: uppercase ">
                        {{ config('universite.name') }}
                    </h4>
                </td>
                <td style="width: 375px; vertical-align: top; text-align: center">
                    <p style="text-align: center">
                        <img src="{{ public_path('arabe/bismillah.png') }}" alt="" width="100" style="margin-top: -10px">
                    </p>
                    <img src="{{ public_path('logo/LOGO.png') }}" alt="" width="75  ">
                </td>
                <td style="400px; vertical-align: top">
                    <div style="margin-left: -30px; margin-bottom: 7px">
                        <img src="{{ public_path('arabe/guinee-1.png') }}" alt="" width="90" style="vertical-align: top"><br>
                        <img src="{{ public_path('arabe/amale.png') }}" alt="" width="85" style="margin-top: 5px"> <br>
                        <span >-----------------------------</span>
                    </div>

                    <img src="{{ public_path('arabe/ministere.png') }}" alt="" width="160" ><br>

                    <img src="{{ public_path('arabe/uni-1.png') }}" alt="" width="85" style="margin-top: 17px">

                </td>
                <td style="width: 80px; vertical-align: top; ">
                    <img src="{{ public_path('logo/drapeau.png') }}" width="35px" style="margin-left: -100px; ">
                </td>
                {{-- <td style="400px; vertical-align: 100%">
                    <p style="font-size: 9.5px">
                        <strong style="display: block; font-size: 11px "> {{ config('universite.republique') }}</strong>
                        <span style="color: red"> Travail </span> -
                        <span style="color: rgb(255, 217, 0)"> Justice </span> -
                        <span style="color: green"> Solidarité </span> <br>
                        <span>-----------------------------</span>
                    </p>
                    <p style="max-width: 275px; font-size: 10px; margin-top: -8px">{{ config('universite.ministere') }}</p>
                    <p class="text-primary text-uppercase" style="color: #11ABFF; font-size: 13px; margin-top: -6px">{{ config('universite.name') }}</p>
                </td>
                <td style="width: 30px; vertical-align: top">
                    <img src="{{ public_path('logo/drapeau.png') }}" width="35px">
                </td> --}}
            </tr>

        </table>
        <hr >
        <p class="tc" style="font-size: 12px; margin-top: -5px">
            <strong  style="color: #11ABFF">Année Universitaire : </strong>
            {{ get_last_session()->session }}
        </p>

    {{-- </header> --}}

    @yield('content')

<body>

</html>
