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
                                <h4 class="page-title">Table Eleve</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Basic</strong> Validation</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <form action=" {{route('eleve.update',$eleve)}} " method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class=" form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" maxlength="30"
                                            minlength="3" value="{{ $eleve->matricule }}" required >
                                            <label class="form-label">Matricule</label>
                                            @error('matricule')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" maxlength="30"
                                            minlength="3" value="{{ $eleve->nom  }}" required>
                                            <label class="form-label">Nom</label>

                                            @error('nom')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" maxlength="30"
                                            minlength="3" value="{{ $eleve->prenom  }}" required>
                                            <label class="form-label">Prénom</label>
                                            @error('prenom')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 ">
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <label for="email_address">Date de naissance</label>
                                            <input id="myDatePicker"  placeholder="Entrez votre date de naissance" name="date_naissance"
                                                value="{{ $eleve->date_naissance }}" class="flatPicker validate @error('date_naissance') is-invalid @enderror" required>
                                                <span class="helper-text" data-error="Date de Naissance Invalide"
                                                    data-success="Date de Naissance Valide">
                                                </span>
                                            @error('date_naissance')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control @error('lieu_naissance') is-invalid @enderror" name="lieu_naissance" maxlength="30"
                                            minlength="3"  value="{{$eleve->lieu_naissance }}" required>
                                            <label class="form-label">Lieu de naissance</label>

                                            @error('lieu_naissance')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            {{-- </div>
                            <div class="row"> --}}
                                <div class="col-sm-4">
                                    <div class=" form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Nationalité</label>
                                            <input type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" maxlength="30"
                                            minlength="3" value="{{$eleve->nationalite }}" required>
                                            @error('nationalite')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-4">
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

                                <div class="col-sm-4">
                                    <div class=" form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control @error('pere') is-invalid @enderror" name="pere" maxlength="30"
                                            minlength="3" value="{{$eleve->pere }}" required>
                                            <label class="form-label">Père</label>

                                            @error('pere')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class=" form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control @error('mere') is-invalid @enderror" name="mere" maxlength="30"
                                            minlength="3" value="{{ $eleve->mere }}" required>
                                            <label class="form-label">Mère</label>

                                            @error('mere')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row ">

                                <div class="col-sm-4">
                                    <div class=" form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control @error('tuteur') is-invalid @enderror" name="tuteur" maxlength="30"
                                                minlength="3" value="{{ $eleve->tuteur }}" required>
                                            <label class="form-label">Tuteur</label>
                                            @error('mere')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" class="form-control @error('email_tuteur') is-invalid @enderror" name="email_tuteur" maxlength="30"
                                            minlength="3" value="{{ $eleve->email_tuteur }}" >
                                            <label class="form-label">Email Tuteur</label>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="phone" class="form-control @error('telephone_tuteur') is-invalid @enderror" name="telephone_tuteur" maxlength="30"
                                            minlength="3" value="{{ $eleve->telephone_tuteur }}" required>
                                            <label class="form-label">Téléphone Tuteur</label>
                                            @error('telephone_tuteur')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class=" form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="{{$eleve->adresse_tuteur }}" class="form-control @error('adresse_tuteur') is-invalid @enderror" name="adresse_tuteur" maxlength="30"
                                            minlength="3" >
                                            <label class="form-label">Adresse Tuteur</label>
                                            @error('adresse_tuteur')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
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

                                </div> --}}
                                <div class="col-sm-4">
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
    </section>
@endsection

@push('scripts')

<<script src="{{ asset('assets/js/form.min.js') }}"></script>
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


