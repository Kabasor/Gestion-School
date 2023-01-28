<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Gestion Universite">
    <meta name="Author" content="Mamadou_saliou_bah">
    <meta name="Keywords" content="Gestion Universite" />
    <!-- PAGE TITLE HERE -->
	<title>{{ page_title($title ?? '') }}</title>

    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon"/>

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" id="style"/>

    <!--- Icons css --->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!--- Style css --->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet"> --}}
    <!--- Icons css --->
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

</head>
	<body class="main-body app sidebar-mini ltr">
		<!-- page -->
	   <div class="page custom-index">
			<!-- main-content -->
            <div class="container mt-4">
                <div class="row mg-s-2">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ asset('logo/drapeau.png') }}" alt="" width="50">
                           </div>
                            <div class="col-md-7">
                                <h5>{{ config('universite.republique')}}</h5>
                                <span> Travail </span> - <span> Justice </span> - <span> Solidarité </span> <br>
                                    -----------------------------
                                <p class="">{{config('universite.ministere')}}</p>
                                <h5 class="text-primary text-uppercase">{{config('universite.name')}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="fw-bold"> {{ config('universite.salutation') }}</p>
                                <img src="{{ asset('logo/LOGO.png') }}" alt="" width="80">
                           </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-7 ">
                                <h4>{{ config('universite.republique_arabe')}}</h4>
                                <strong class="tx-danger"> عمل </strong> - <strong class="tx-warning"> عدالة </strong> - <strong class="tx-success ">  تضامن  </strong> <br>
                                    -----------------------------
                                <h6 class="">{{ config('universite.ministere_arab')}}</h6>
                                <h5 class="text-primary text-uppercase">{{ config('universite.universite_arabe')}}</h5>
                            </div>
                            <div class="col-md-2">
                                <img src="{{ asset('logo/drapeau.png') }}" alt="" width="90">
                            </div>
                        </div>
                    </div>
                    <hr class="pg-2">
                </div>

            </div>

            <div class="main-container container-fluid">

                <!-- main-content-body -->
                <div class="main-content-body">
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- /main-content -->
    </div>
    <!-- page closed -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!--- Bootstrap Bundle  js --->
    <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    {{-- <!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> --}}

		<!--- P-scroll js --->
		{{-- <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script> --}}

		<!-- Select2 js-->
		{{-- <script src="../assets/plugins/select2/js/select2.min.js"></script> --}}

		<!-- DATA TABLE JS-->

    <!-- DATA TABLE JS-->
    {{-- <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="../assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script> --}}

	{{-- <script src="../assets/js/table-data.js"></script> --}}

		<!--- Sidebar js --->
		{{-- <script src="../assets/plugins/side-menu/sidemenu.js"></script> --}}

		<!--- sticky js --->
		{{-- <script src="../assets/js/sticky.js"></script> --}}

		{{-- <!--- Right-sidebar js --->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script> --}}

		<!--- Eva-icons js --->
		{{-- <script src="../assets/js/eva-icons.min.js"></script>

		<!--- Index js --->
		<script src="../assets/js/script.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script> --}}

		<!--- Custom js --->
		<script src="{{asset('assets/js/custom.js') }}"></script>
    {{-- <script>
        window.addEventListener("load", window.print());
    </script> --}}

    {{-- window.addEventListener("beforeprint", (evenement) => {
    console.log("Before print");
    }); --}}

    {{-- window.addEventListener("afterprint", (evenement) => {
    console.log("Before print");
    }); --}}
</body>

</html>

