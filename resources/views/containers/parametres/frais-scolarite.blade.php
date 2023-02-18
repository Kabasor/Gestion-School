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
                            <h2>
                                <strong>Tab</strong> Frais de scolarité </h2>

                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation">
                                    <a href="#home_with_icon_title" data-bs-toggle="tab" class="active show">
                                        <i class="material-icons">home</i> Créer
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-bs-toggle="tab">
                                        <i class="material-icons">face</i> PROFILE
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
                                                <div class="body">
                                                    <form action="@route('fraiscolarite.store')" id="form_advanced_validation" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="row mt-3">
                                                                <div class="col-sm-4 ">
                                                                    <div class="form-group default-select select2Style">
                                                                        <label class="mb-2">Séléctionnez la classe</label>
                                                                        <select class="form-control select2" name="classe" data-placeholder="Séléctionnez la classe">
                                                                            @foreach ($classes as $classe)
                                                                                <option value="{{ $classe->id }}"
                                                                                    @selected(old('classe') == $classe->id)>
                                                                                    {{ $classe->libelle }}
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
                                                                <div class="col-sm-4 mt-3">
                                                                    <div class=" form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control champ" name="prix_inscription" maxlength="20"
                                                                            minlength="1" required>
                                                                            <label class="form-label">Prix Inscription</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4 mt-3">
                                                                    <div class=" form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control champ" name="prix_reinscription" maxlength="20"
                                                                            minlength="1" required>
                                                                            <label class="form-label">Prix Réinscription</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3 mt-3">
                                                                    <div class=" form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control champ" name="scolarite_annuel" maxlength="20"
                                                                            minlength="1" required>
                                                                            <label class="form-label">Scolarité Annuel</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 mt-3">
                                                                    <div class=" form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control champ" name="premiere_tranche" maxlength="20"
                                                                            minlength="1" required>
                                                                            <label class="form-label">Prémière Tranche </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 mt-3">
                                                                    <div class=" form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control champ" name="deuxieme_tranche" maxlength="20"
                                                                            minlength="1" required>
                                                                            <label class="form-label">Deuxième Tranche</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 mt-3">
                                                                    <div class=" form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control champ" name="troisieme_tranche" maxlength="20"
                                                                            minlength="1" required>
                                                                            <label class="form-label">Troisième Tranche</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <button class="btn btn-info waves-effect" type="submit"> <i data-feather="save"></i> Enregistrer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #END# Advanced Validation -->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <b>Profile Content</b>
                                    <div class="table-responsive">
                                        <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                            <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Classe</th>
                                                    <th>Prix Inscription</th>
                                                    <th>Prix Réinscription</th>
                                                    <th>Prix Scolarité</th>
                                                    <th>Prémière Tranche</th>
                                                    <th>Deuxième Tranche</th>
                                                    <th>Troisième Tranche</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($fraisScolarites as $fraisScolarite)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $fraisScolarite->classe->libelle }}</td>
                                                        <td>{{ format_price($fraisScolarite->inscription) }}</td>
                                                        <td>{{ format_price($fraisScolarite->reinscription) }}</td>
                                                        <td>{{ format_price($fraisScolarite->scolarite) }}</td>
                                                        <td>{{ format_price($fraisScolarite->premiere_tranche_scolarite_inscription) }}</td>
                                                        <td>{{ format_price($fraisScolarite->deuxieme_tranch_scolarite_inscription) }}</td>
                                                        <td>{{ format_price($fraisScolarite->troisieme_tranch_scolarite_inscription) }}</td>
                                                        <td>
                                                            {{-- <a href="{{route('fraiscolarite.show',$fraisScolarite)}}" class="btn btn-tbl-edit">
                                                                <i class="material-icons">remove_red_eye</i>
                                                            </a> --}}
                                                            <a href="{{route('fraiscolarite.edit',$fraisScolarite)}}" class="btn btn-tbl-edit">
                                                                <i class="material-icons">create</i>
                                                            </a>

                                                            <form style="display: inline" action="@route('fraiscolarite.destroy', $fraisScolarite)" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{$fraisScolarite->id}}" type="submit">
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
@endpush
