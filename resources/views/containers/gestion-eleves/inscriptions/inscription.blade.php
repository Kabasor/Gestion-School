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
                                        <i class="material-icons">home</i> Inscription
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
                                                    <form action="@route('inscription.store')" id="form_advanced_validation" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="matricule" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Matricule</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="nom" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Nom</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="prenom" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Prénom</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                        {{-- </div> --}}
                                                        {{-- <div class="row"> --}}
                                                            {{-- <div class="col-sm-4 mt-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="email" class="form-control" name="email" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Email</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-sm-3 ">
                                                                <div class="form-group ">
                                                                    <div class="form-line">
                                                                        <label for="email_address">Date de naissance</label>
                                                                        <input id="myDatePicker"  placeholder="Entrez votre date de naissance" name="date_de_naissance"
                                                                            value="{{ old('date_de_naissance')}}" class="flatPicker validate @error('date_de_naissance') is-invalid @enderror" required>
                                                                            <span class="helper-text" data-error="Date de Naissance Invalide"
                                                                                data-success="Date de Naissance Valide">
                                                                            </span>
                                                                        @error('date_de_naissance')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 mt-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="lieu_de_naissance" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Lieu de naissance</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                        {{-- </div>
                                                        <div class="row"> --}}
                                                            <div class="col-sm-3 mt-4">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="nationalite" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Nationalité</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-sm-2 mt-4">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="adresse" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Adresse</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-sm-3 mt-2">
                                                                <div class="form-group default-select select2Style">
                                                                    <label>Séléctionnez le Sexe</label>
                                                                    <select name="sexe" class="form-control select2" data-placeholder="Séléctionnez le Sexe">
                                                                        @foreach (EnumSexe::cases() as $sexe)
                                                                            <option value="{{ $sexe->value }}"
                                                                                @selected(old('sexe'))>
                                                                                {{ $sexe }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('sexe')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        {{-- </div>
                                                        <div class="row"> --}}
                                                            <div class="col-sm-4">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="pere" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Père</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="mere" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Mère</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="tuteur" maxlength="30"
                                                                            minlength="3" required>
                                                                        <label class="form-label">Tuteur</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="email" class="form-control" name="email_tuteur" maxlength="30"
                                                                        minlength="3" >
                                                                        <label class="form-label">Email Tuteur</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 mt-3">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="phone" class="form-control" name="telephone_tuteur" maxlength="30"
                                                                        minlength="3" required>
                                                                        <label class="form-label">Téléphone Tuteur</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class=" form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text" value="{{ old('adresse_tuteur') }}" class="form-control @error('adresse_tuteur') is-invalid @enderror" name="adresse_tuteur" maxlength="30"
                                                                        minlength="3" >
                                                                        <label class="form-label">Adresse Tuteur</label>
                                                                    </div>
                                                                    <div class="help-info">Min. 3, Max. 30 characters</div>
                                                                    @error('adresse_tuteur')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-sm-4 mt-3">
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
                                                            <div class="col-sm-5 mt-3">
                                                                <div class="file-field input-field">
                                                                    <div class="btn">
                                                                        <span>Photo</span>
                                                                        <input type="file" name="photo" >
                                                                    </div>
                                                                    <div class="file-path-wrapper">
                                                                        <input class="file-path validate" type="text">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
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
                                    <a class="card-title btn btn-primary mg-b-20" href="@route('print.inscription')">
                                        <i class="bi bi-printer" style="color: #FFF"></i> Imprimer la liste
                                    </a>
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
                                                            Actions
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
                                    <div class="col-sm-3 mt-3">
                                        <label>Inscription : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ inscription  @error('prix_inscription') is-invalid @enderror"
                                            name="prix_inscription" id="inscription"
                                            value="${response.frais_scolarite.inscription}"
                                            disabled required
                                        >
                                    </div>

                                    <div class="col-sm-3 mt-3">
                                        <label>Scolarité : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ scolarite  @error('prix_scolarite') is-invalid @enderror"
                                            name="prix_scolarite" id="scolarite"
                                            value="${response.frais_scolarite.scolarite}"
                                            disabled required>
                                    </div>
                                    <div class="col-sm-3 mt-3">
                                        <label>Montant payé : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ montant_paye  @error('prix_montant_paye') is-invalid @enderror"
                                            name="prix_montant_paye" id="montant_paye"
                                            value=""
                                            required>
                                    </div>
                                    <div class="col-sm-3 mt-3">
                                        <label>Montant Total  : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ montant_total  @error('montant_total') is-invalid @enderror"
                                            name="montant_total" id="montant_total"
                                            value="${(response.frais_scolarite.total_inscription_scolarite)}"
                                            disabled required
                                        >
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


