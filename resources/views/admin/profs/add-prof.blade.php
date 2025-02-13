@extends('layouts.default')
    @push('styles')
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
                                <h4 class="page-title">Table professeurs</h4>
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
                        <form action=" {{route('prof.store')}} " method="POST" enctype="multipart/form-data">
                            @csrf
                                    <div class="row clearfix">
                                        <div class="col-sm-3">
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
                                    <div class="col-sm-3">
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
                                    <div class="col-sm-3">
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
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="email">Email <span class="text-danger">*</span> :</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{old('email')}}" />
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3 mt-3">
                                        <div class="form-group default-select select2Style">
                                            <label>Séléctionnez le sexe <span class="text-danger">*</span> </label>
                                            <select name="genre" id="genre" class="form-control select2 @error('genre') is-invalid @enderror" data-placeholder="Séléctionnez le Sexe">
                                                <option> Masculin </option>
                                                <option> Feminin </option>
                                            </select>
                                            @error('genre')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mt-3">
                                        <div class="form-group default-select select2Style">
                                            <label>Séléctionnez le diplôme <span class="text-danger">*</span> </label>
                                            <select name="diplome" id="diplome" class="form-control select2 @error('diplome') is-invalid @enderror" data-placeholder="Séléctionnez le Sexe">
                                                <option> Licence </option>
                                                <option> Maitrise </option>
                                                <option> Master </option>
                                                <option> Doctorat </option>
                                            </select>
                                            @error('diplome')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="adresse">Adresse <span class="text-danger">*</span> :</label>
                                            <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value=" {{old('adresse')}}" />
                                            @error('adresse')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form">
                                            <label for="phone">Téléphone <span class="text-danger">*</span> :</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value=" {{old('phone')}}" />
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="salaire">salaire de base <span class="text-danger">*</span> :</label>
                                            <input type="text" class="form-control @error('salaire') is-invalid @enderror" name="salaire" value=" {{old('salaire')}}" />
                                            @error('salaire')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="nationalite">Nationalité <span class="text-danger">*</span> :</label>
                                            <input type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" value=" {{old('nationalite')}}" />
                                            @error('nationalite')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <div class="form-group ">
                                            <div class="form-line">
                                                <label for="email_address">Date de naissance</label>
                                                <input id="myDatePicker"  placeholder="Entrez votre date de naissance" name="dateNaissance"
                                                    value="{{ old('dateNaissance')}}" class="flatPicker validate @error('dateNaissance') is-invalid @enderror" >
                                                    <span class="helper-text" data-error="Date de Naissance Invalide"
                                                        data-success="Date de Naissance Valide">
                                                    </span>
                                                @error('dateNaissance')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="lieunaissance">Lieu de naissance <span class="text-danger">*</span> :</label>
                                            <input type="text" class="form-control @error('lieunaissance') is-invalid @enderror" name="lieunaissance" value=" {{old('lieunaissance')}}" />
                                            @error('lieunaissance')
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
                                            <label>Séléctionnez le niveau</label>
                                            <select name="niveau_id" id="niveau_id" class="form-control select2" data-placeholder="Séléctionnez le niveau">
                                                @foreach ($niveaux as $niveau )
                                                <option value="{{$niveau->id}}"> {{$niveau->libelle}} </option>
                                                @endforeach
                                            </select>
                                            @error('niveau_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form">
                                            <label for="description">description :</label>
                                            <textarea id="description" name="description" class="form-control" value=" {{old('description')}}" data-length="120"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <h2 class="card-inside-title">File Upload</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Photo</span>
                                                <input type="file" name="image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix js-sweetalert">
                                    <div class="col-sm-6">
                                        {{-- <button type="submit" class="btn btn-outline-default btn-border-radius">Enregistré</button> --}}
                                        {{-- <button type="submit" class="btn btn-primary waves-effect" data-type="success">Enregistré</button> --}}
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


