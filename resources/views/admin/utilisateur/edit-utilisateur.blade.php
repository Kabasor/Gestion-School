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
                        <form action=" {{route('prof.update', $prof)}} " method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Matricule">Matricule <span class="text-danger">*</span> :</label>
                                        <input type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value=" {{$prof->matricule}}" />
                                        @error('matricule')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form">
                                        <label for="nom">Nom <span class="text-danger">*</span> :</label>
                                        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value=" {{$prof->nom}}" />
                                        @error('nom')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="prenom">Prenom <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value=" {{$prof->prenom}}" />
                                    @error('prenom')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form">
                                    <label for="email">Email <span class="text-danger">*</span> :</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{$prof->email}}" />
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="diplome">Diplome <span class="text-danger">*</span> :</label>
                                    <select  name="diplome" id="diplome">
                                        <option value="Licence" {{($prof->genre == 'Licence')? 'selected':''}}> Licence </option>
                                        <option value="Maitrise" {{($prof->genre == 'Maitrise')? 'selected':''}}> Maitrise </option>
                                        <option value="Master" {{($prof->genre == 'Master')? 'selected':''}}> Master </option>
                                        <option value="Doctorat" {{($prof->genre == 'Doctorat')? 'selected':''}}> Doctorat </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form">
                                    <label for="phone">Téléphone <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value=" {{$prof->phone}}" />
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="adresse">Adresse <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value=" {{$prof->adresse}}" />
                                    @error('adresse')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-sm-6 mt-2">
                                <div class="form-group default-select select2Style">
                                    <label>Séléctionnez le Sexe</label>
                                    <select name="genre" class="form-control select2" data-placeholder="Séléctionnez le Sexe">
                                        @foreach (EnumSexe::cases() as $genre)
                                            <option value="{{ $genre->value }}"
                                                @selected(old('genre'))>
                                                {{ $genre }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('genre')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form">
                                    <label for="genre">Séléctionez le sexe<span class="text-danger">*</span> :</label>
                                    <select  name="genre" id="genre">
                                        <option value="Masculin" {{($prof->genre == 'Masculin')? 'selected':''}}> Masculin </option>
                                        <option value="Feminin" {{($prof->genre == 'Feminin')? 'selected':''}}> Feminin </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nationalite">Nationalité <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" value=" {{$prof->nationalite}}" />
                                    @error('nationalite')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="form-group ">
                                    <div class="form-line">
                                        <label for="email_address">Date de naissance</label>
                                        <input id="myDatePicker"  placeholder="Entrez votre date de naissance" name="dateNaissance"
                                            value="{{$prof->dateNaissance }}" class="flatPicker validate @error('dateNaissance') is-invalid @enderror" >
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
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lieuNaissance">Lieu de naissance <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('lieuNaissance') is-invalid @enderror" name="lieuNaissance" value=" {{$prof->lieuNaissance }}" />
                                    @error('lieuNaissance')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form">
                                    <label for="description">description :</label>
                                    <textarea id="description" name="description" class="form-control" value=" {{$prof->description}}" data-length="120"></textarea>
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








