@extends('layouts.default')
@push('styles')
<link href="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/form.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/js/bundles/multiselect/css/multi-select.css')}}" rel="stylesheet">
@endpush
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Table Utilisateurs</h4>
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
                            @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <form action=" {{route('user.store')}} " method="POST" enctype="multipart/form-data">
                            @csrf
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="Matricule">Matricule <span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value=" {{old('matricule')}}" />
                                                    @error('matricule')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form">
                                                    <label for="nom">Nom <span class="text-danger">*</span> :</label>
                                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value=" {{old('nom')}}" />
                                                    @error('nom')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="prenom">Prenom <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value=" {{old('prenom')}}" />
                                                @error('prenom')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="email">email <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{old('email')}}" />
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="telephone">telephone <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value=" {{old('telephone')}}" />
                                                @error('telephone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-3">
                                        <div class="form-group default-select select2Style">
                                            <label>Séléctionnez la Fonction</label>
                                            <select name="fonction" class="form-control select2" data-placeholder="Séléctionnez la fonction">
                                                <option>Fondateur</option>
                                                <option>Directeur Générale</option>
                                                <option>Comptable</option>
                                                <option>Directeur du primaire</option>
                                                <option>Secretaire</option>
                                                <option>charger des affaire interne</option>
                                                <option>Assistant</option>
                                            </select>
                                            @error('fonction')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4 mt-3">
                                        <div class="form-group default-select select2Style">
                                            <label>Séléctionnez la Fonction</label>
                                            <select name="role" class="form-control select2" data-placeholder="Séléctionnez la role">
                                                <option>Administrateur</option>
                                                <option>Utilisateur</option>
                                                <option>Développeur</option>

                                            </select>
                                            @error('role')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <div class="form-group default-select select2Style">
                                        <label>Séléctionnez le Diplome</label>
                                        <select name="diplome" class="form-control select2" data-placeholder="Séléctionnez la diplome">
                                            <option >Doctorat</option>
                                            <option >Master 2</option>
                                            <option >Master 1</option>
                                            <option >Licence</option>
                                        </select>
                                        @error('diplome')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="adresse">adresse <span class="text-danger">*</span> :</label>
                                        <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adress" value=" {{old('adresse')}}" />
                                        @error('adresse')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-4 mt-1 ">
                                    <div class="form-group ">
                                        <div class="form-line">
                                            <label for="email_address">Date de naissance</label>
                                            <input id="myDatePicker"  placeholder="Entrez votre date de naissance" name="date_naissance"
                                                value="{{ old('date_naissance')}}" class="flatPicker validate @error('date_naissance') is-invalid @enderror" required>
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
                                <div class="form-group">
                                    <div class="form">
                                        <label for="lieu_naissance">lieu de naissance <span class="text-danger">*</span> :</label>
                                        <input type="text" class="form-control @error('lieu_naissance') is-invalid @enderror" name="lieu_naissance" value=" {{old('lieu_naissance')}}" />
                                        @error('lieu_naissance')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-3">
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
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="salaire">salaire <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('salaire') is-invalid @enderror" name="salaire" value=" {{old('salaire')}}" />
                                    @error('salaire')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4 mt-3">
                                <div class="form-group default-select select2Style">
                                    <label>Séléctionnez l'active</label>
                                    <select name="active" class="form-control select2" data-placeholder="Séléctionnez la active">
                                        <option value="Active">1</option>
                                        <option value="Non_active">0</option>
                                    </select>
                                    @error('active')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="password">password <span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" value=" {{old('password')}}" />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form">
                                <label for="biographie">Biographie<span class="text-danger">*</span> :</label>
                                <textarea  class="form-control @error('biographie') is-invalid @enderror" name="biographie" id="biographie" cols="30" rows="10"></textarea>
                                @error('biographie')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                        <h2 class="card-inside-title">File Upload</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6 mt-3">
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
                        <div class="row clearfix js-sweetalert">
                            <div class="col-sm-6">
                                <button class="btn btn-info waves-effect" type="submit"> <i data-feather="save"></i> Enregistrer</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
            <!-- #END# Basic Validation -->


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

@endpush


