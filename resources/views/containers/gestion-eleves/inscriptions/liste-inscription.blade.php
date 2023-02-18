{{-- @extends('layouts.default')
@push('styles')
    <!-- Colorpicker Css -->
    <link href="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />
    <!-- Multi Select Css -->
    <link href="{{ asset('assets/js/bundles/multiselect/css/multi-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/form.min.css') }}" rel="stylesheet">
@endpush
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Liste des Eleves inscrits</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> <strong>Tab</strong> With Icon Titles</h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation">
                                    <a href="#home_with_icon_title" data-bs-toggle="tab" class="active show">
                                        <i class="material-icons">home</i> Liste simples des élèves inscrits
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-bs-toggle="tab">
                                        <i class="material-icons">face</i> Liste complets des élèves inscrits
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-bs-toggle="tab">
                                        <i class="material-icons">email</i> MESSAGES
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-bs-toggle="tab">
                                        <i class="material-icons">settings</i> SETTINGS
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="home_with_icon_title">
                                    <a class="card-title btn btn-primary mg-b-20" href="@route('print.inscription')">
                                        <i class="bi bi-printer" style="color: #FFF"></i> Imprimer la liste
                                    </a>
                                    <!-- Advanced Validation -->
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                                    <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Matricule</th>
                                                            <th>Nom</th>
                                                            <th>Prénom</th>
                                                            <th>Date de naissance</th>
                                                            <th>Lieu</th>
                                                            <th>Sexe</th>
                                                            <th>Classe</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($inscriptions as $inscription)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $inscription->eleve->matricule }}</td>
                                                                <td>{{ $inscription->eleve->nom }}</td>
                                                                <td>{{ $inscription->eleve->prenom }}</td>
                                                                <td>{{ $inscription->eleve->date_naissance->format('d/m/Y') }}</td>
                                                                <td>{{ $inscription->eleve->lieu_naissance }}</td>
                                                                <td>{{ $inscription->eleve->sexe }}</td>
                                                                <td>{{ $inscription->eleve->classe->libelle }}</td>
                                                                <td class="center">
                                                                    <a href="{{route('inscription.show',$inscription)}}" class="btn btn-tbl-edit">
                                                                        <i class="material-icons">remove_red_eye</i>
                                                                    </a>
                                                                    <a href="{{route('inscription.edit',$inscription)}}" class="btn btn-tbl-edit">
                                                                        <i class="material-icons">create</i>
                                                                    </a>
                                                                    <form style="display: inline" action="@route('inscription.destroy', $inscription)" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{ $inscription->id }}" type="submit">
                                                                            <i class="material-icons">delete_forever</i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #END# Advanced Validation -->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <div class="table-responsive">
                                        <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                            <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Matricule</th>
                                                    <th>Nom</th>
                                                    <th>Prénom</th>
                                                    <th>Date de naissance</th>
                                                    <th>Lieu</th>
                                                    <th>Sexe</th>
                                                    <th>Classe</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($inscriptions as $inscription)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $inscription->eleve->matricule }}</td>
                                                        <td>{{ $inscription->eleve->nom }}</td>
                                                        <td>{{ $inscription->eleve->prenom }}</td>
                                                        <td>{{ $inscription->eleve->date_naissance->format('d/m/Y') }}</td>
                                                        <td>{{ $inscription->eleve->lieu_naissance }}</td>
                                                        <td>{{ $inscription->eleve->sexe }}</td>
                                                        <td>{{ $inscription->eleve->classe->libelle }}</td>
                                                        <td>
                                                            <a href="{{route('inscription.show',$inscription)}}" class="btn btn-tbl-edit">
                                                                <i class="material-icons">remove_red_eye</i>
                                                            </a>
                                                            <a href="{{route('inscription.edit',$inscription)}}" class="btn btn-tbl-edit">
                                                                <i class="material-icons">create</i>
                                                            </a>
                                                            <div>
                                                            <form style="display: inline" action="@route('inscription.destroy', $inscription)" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{$inscription->id}}" type="submit">
                                                                    <i class="material-icons">delete_forever</i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <b>Message Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                        mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                        aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                        gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <b>Settings Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit
                                        mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                        aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                        gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Icon Title -->
        </div>
    </section>
@endsection

@push('scripts')

    <script src="{{ asset('assets/js/form.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles//multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
    <script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ asset('assets/js/pages/forms/form-validation.js') }}"></script>


    <script src="{{ asset('assets/js/table.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>

    <script type="text/javascript">


    </script>

@endpush

 --}}


 @extends('layouts.default')

 @push('styles')
 <!-- Colorpicker Css -->
 <link href="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />
 <!-- Multi Select Css -->
 <link href="{{ asset('assets/js/bundles/multiselect/css/multi-select.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/css/form.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Table classes</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="mt-5" >
                        <div class="header">
                            <h2>
                                <button class="btn-hover btn-border-radius color-5">
                                    <a href="@route('print.inscription')"><i class="bi bi-printer" style="color: #FFF">IMPRIMER</i></a>
                                </button>

                                {{-- <strong>Exportable</strong> Table</h2> --}}
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    {{-- <button class="btn-hover color-6"><a href=" {{route('inscription.create')}} "> Inscription</a></button> --}}
                                    <button class="btn-hover btn-border-radius color-6">
                                        <a href=" {{route('inscription.create')}} "><i class="bi bi-printer" style="color: #FFF">Inscription</i></a>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Date de naissance</th>
                                        <th>Lieu</th>
                                        <th>Sexe</th>
                                        <th>Classe</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscriptions as $inscription)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $inscription->eleve->matricule }}</td>
                                            <td>{{ $inscription->eleve->nom }}</td>
                                            <td>{{ $inscription->eleve->prenom }}</td>
                                            <td>{{ $inscription->eleve->date_naissance->format('d/m/Y') }}</td>
                                            <td>{{ $inscription->eleve->lieu_naissance }}</td>
                                            <td>{{ $inscription->eleve->sexe }}</td>
                                            <td>{{ $inscription->eleve->classe->libelle }}</td>
                                            <td class="center">
                                                <a href="{{route('inscription.show',$inscription)}}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a href="{{route('inscription.edit',$inscription)}}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <form style="display: inline" action="@route('inscription.destroy', $inscription)" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{ $inscription->id }}" type="submit">
                                                        <i class="material-icons">delete_forever</i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            </div>
                {{-- ////////////////////////// --}}
                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                    <div class="table-responsive">
                        <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Date de naissance</th>
                                    <th>Lieu</th>
                                    <th>Sexe</th>
                                    <th>Classe</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inscriptions as $inscription)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $inscription->eleve->matricule }}</td>
                                        <td>{{ $inscription->eleve->nom }}</td>
                                        <td>{{ $inscription->eleve->prenom }}</td>
                                        <td>{{ $inscription->eleve->date_naissance->format('d/m/Y') }}</td>
                                        <td>{{ $inscription->eleve->lieu_naissance }}</td>
                                        <td>{{ $inscription->eleve->sexe }}</td>
                                        <td>{{ $inscription->eleve->classe->libelle }}</td>
                                        <td>
                                            <a href="{{route('inscription.show',$inscription)}}" class="btn btn-tbl-edit">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="{{route('inscription.edit',$inscription)}}" class="btn btn-tbl-edit">
                                                <i class="material-icons">create</i>
                                            </a>
                                            <div>
                                            <form style="display: inline" action="@route('inscription.destroy', $inscription)" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{$inscription->id}}" type="submit">
                                                    <i class="material-icons">delete_forever</i>
                                                </button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
        </section>
@endsection
    @push('scripts')
    <script src="{{ asset('assets/js/table.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{ asset('assets/js/pages/ui/dialogs.js')}}"></script>
    @endpush




