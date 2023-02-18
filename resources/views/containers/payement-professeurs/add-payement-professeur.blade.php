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
                                <h4 class="page-title">Table Matiéres</h4>
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
                        <form action=" {{route('paiementProfesseur.store')}} " method="POST" enctype="multipart/form-data">
                            @csrf
                                    <div class="row clearfix">
                                        <div class="col-sm-4 mt-3">
                                            <div class="form-group default-select select2Style">
                                                <label>Séléctionnez le professeur <span class="text-danger">*</span> </label>
                                                <select name="prof" id="prof_id" class="form-control select2 @error('prof_id') is-invalid @enderror" data-placeholder="Séléctionnez le Sexe">
                                                        @foreach ($profs as $prof )
                                                            <option value="{{$prof->id}}">
                                                                {{$prof->matricule }} &emsp;&emsp;{{$prof->nom . ' '. $prof->prenom }}
                                                            </option>
                                                        @endforeach
                                                </select>
                                                @error('prof_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mt-3">
                                            <div class="form-group default-select select2Style">
                                                <label>Séléctionnez le niveaux <span class="text-danger">*</span> </label>
                                                <select name="niveau" id="niveau_id" class="form-control select2 @error('niveau_id') is-invalid @enderror" data-placeholder="Séléctionnez le Sexe">
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
                                        <div class="col-sm-4 mt-3">
                                            <div class="form-group default-select select2Style">
                                                <label>Séléctionnez la matiere <span class="text-danger">*</span> </label>
                                                <select name="matiere" id="matiere_id" class="form-control select2 @error('matiere_id') is-invalid @enderror" data-placeholder="Séléctionnez le Sexe">
                                                        @foreach ($matieres as $matiere )
                                                            <option value="{{$matiere->id}}"> {{$matiere->nom_matiere}} </option>
                                                        @endforeach
                                                </select>
                                                @error('matiere_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="taux_horaire">Taux horaire <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('taux_horaire') is-invalid @enderror" name="taux_horaire" value=" {{old('taux_horaire')}}" />
                                                @error('taux_horaire')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="prix_par_heure">prix d'heure<span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('prix_par_heure') is-invalid @enderror" name="prix_par_heure" value=" {{old('prix_par_heure')}}" />
                                                @error('prix_par_heure')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nombre_dheure">Nombre Heure<span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('nombre_dheure') is-invalid @enderror" name="nombre_dheure" value=" {{old('nombre_dheure')}}" />
                                                @error('nombre_dheure')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="montant">Montant à payer<span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" value=" {{old('montant')}}" />
                                                @error('montant')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
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


