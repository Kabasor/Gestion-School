
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
                                <h4 class="page-title">Liste des Eleves</h4>
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
                                        <i class="material-icons">home</i> Payements
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-bs-toggle="tab">
                                        <i class="material-icons">face</i> PROFILE
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
                                    <!-- Advanced Validation -->
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2> <strong>Advance</strong> Validation</h2>

                                                </div>
                                                <div class="body">
                                                    <form action="@route('paiementeleve.store')" id="form_advanced_validation" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                           <div class="row mt-3">
                                                            <div class="col-sm-6">
                                                                <div class="form-group default-select select2Style">
                                                                    <label class="mb-2">Séléctionnez l'eleve</label>
                                                                    <select class="form-control select2" name="eleve" id="eleve" data-placeholder="Séléctionnez l'eleve">
                                                                        @foreach ($eleves as $eleve)
                                                                            <option value="{{ $eleve->id }}"  @selected(old('eleve') == $eleve->id)>

                                                                                {{$eleve->matricule }} &emsp;&emsp;{{$eleve->nom . ' '. $eleve->prenom }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('eleve')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group default-select select2Style">
                                                                    <label class="mb-2">Séléctionnez la classe</label>
                                                                    <select class="form-control select2" name="classe" id="classe" data-placeholder="Séléctionnez la classe">
                                                                        @foreach ($classes as $classe)
                                                                            <option value="{{ $classe->id }}"
                                                                                @selected(old('classe') == $classe->id)>
                                                                                {{ $classe->libelle }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('classe')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row" id="info_sup"></div>
                                                        <div class="row" id="row_data"></div>
                                                        <button class="btn btn-info waves-effect" type="submit"> <i data-feather="save"></i> Enregistrer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #END# Advanced Validation -->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <a class="card-title btn btn-primary mg-b-20" href="@route('print.reinscription')">
                                        <i class="bi bi-printer" style="color: #FFF"></i> Imprimer la liste
                                    </a>
                                   <div class="table-responsive">
                                        <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                            <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>matricule</th>
                                                    <th>Nom</th>
                                                    <th>Prénom</th>
                                                    <th>Dernier payement</th>
                                                    <th>Montant payé</th>
                                                    <th>Total à payer</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($payements as $paiementeleve)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $paiementeleve->eleve->matricule }}</td>
                                                    <td>{{ $paiementeleve->eleve->nom }}</td>
                                                    <td>{{ $paiementeleve->eleve->prenom }}</td>
                                                    <td>{{ $paiementeleve->dernier_payement}}</td>
                                                    <td>{{ $paiementeleve->montant_paye }}</td>
                                                    <td>{{ $paiementeleve->montant_total }}</td>

                                                    <td class="center">
                                                        {{-- <a href="{{route('paiement-eleve.show',$paiementeleve)}}" class="btn btn-tbl-edit">
                                                            <i class="material-icons">remove_red_eye</i>
                                                        </a> --}}
                                                        <a href="{{route('paiementeleve.edit',$paiementeleve)}}" class="btn btn-tbl-edit">
                                                            <i class="material-icons">create</i>
                                                        </a>
                                                        <form style="display: inline" action="@route('paiementeleve.destroy', $paiementeleve)" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{ $paiementeleve->id }}" type="submit">
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
        $(document).ready(function () {
            $('.msg').hide();
            $('#eleve').on('change', function () {
                let id_eleve = $(this).find('option:selected').val();
                console.log(id_eleve);
                // $('#niveau_actuel').removeAttr('hidden');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "@route('get.eleve')/" + id_eleve,
                    data: {
                        id_eleve: id_eleve
                    },
                    success: function(response) {
                        let data = "";
                        // console.log(response);
                        // <div class="col-sm-3 mt-3">
                        //                 <label>Scolarité : <span class="tx-danger">*</span></label>
                        //                 <input type="text"
                        //                     class="form-control champ scolarite  @error('prix_scolarite') is-invalid @enderror"
                        //                     name="prix_scolarite" id="scolarite"
                        //                     value="${response.frais_scolarite.scolarite}"
                        //                     disabled required>
                        //             </div>
                        data += `
                        <div class="row">
                            <div class="col-sm-3 mt-3">
                                <label>Matricule : <span class="tx-danger">*</span></label>
                                <input disabled  type="text" class="form-control " name="matricule" value="${response.matricule}"  required>
                            </div>
                            <div class="col-sm-3 mt-3">
                                <label>Nom : <span class="tx-danger">*</span></label>
                                <input disabled  type="text" class="form-control " name="nom" value="${response.nom}"  required>
                            </div>
                            <div class="col-sm-3 mt-3">
                                <label>Prenom : <span class="tx-danger">*</span></label>
                                <input disabled  type="text" class="form-control " name="prenom" value="${response.prenom}"  required>
                            </div>
                            <div class="col-sm-3 mt-3">
                                <label>Classe : <span class="tx-danger">*</span></label>
                                <input disabled  type="text" class="form-control " name="" value="${response.classe.libelle}"  required>
                            </div>

                            </div>

                        `

                        $('#info_sup').html(data);
                    },
                    error: function(error) {

                    }
                });
            });
            $('#classe').on('change', function() {
                let classe = $(this).find('option:selected').val();
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "@route('frais.scolarite.classe')/"+classe,
                    data: {
                        classe: classe,
                    },
                    success: function(response) {
                        let data = "";
                        if(response.frais_scolarite) {

                            data += `
                                <div class="row">
                                    <div class="col-sm-4 mt-3">
                                        <label>Libelle : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ libelle  @error('libelle') is-invalid @enderror"
                                            name="libelle" id="libelle"
                                            value=""
                                             required>
                                    </div>


                                    <div class="col-sm-4 mt-3">
                                        <label>Montant payé : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ montant_paye  @error('prix_montant_paye') is-invalid @enderror"
                                            name="montant_paye" id="montant_paye"
                                            value=""
                                            required>
                                    </div>

                                    <div class="col-sm-4 mt-3">
                                        <label>Montant Total  : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ montant_total  @error('montant_total') is-invalid @enderror"
                                            name="montant_total" id="montant_total"
                                            value="${(response.frais_scolarite.total_reinscription_scolarite)}"
                                            disabled required>
                                    </div>
                                </div>
                            `
                        }

                        $('#row_data').html(data);

                    },
                    error: function(error) {

                    }
                });

            });

        });


    </script>

@endpush


