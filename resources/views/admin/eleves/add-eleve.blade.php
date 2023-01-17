@extends('layouts.default')
@push('styles')
    <link href="/{{('assets/css/form.min.css')}}" rel="stylesheet">
    <link href="/{{('assets/js/bundles/multiselect/css/multi-select.css')}}" rel="stylesheet">
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
                        <form action=" {{route('eleve.store')}} " method="POST" enctype="multipart/form-data">
                            @csrf
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Matricule">Matricule <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value=" {{old('matricule')}}" />
                                                @error('matricule')
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('matricule') }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="nom">Nom <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value=" {{old('nom')}}" />
                                                @error('nom')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('nom') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="Prenom">Prenom <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value=" {{old('prenom')}}" />
                                                @error('prenom')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('prenom') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="dateNaissance">Date de naissance <span class="text-danger">*</span> :</label>
                                                <input type="date" class="form-control @error('dateNaissance') is-invalid @enderror" name="dateNaissance" value=" {{old('dateNaissance')}}"  />
                                                @error('dateNaissance')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('dateNaissance') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="lieuNaissance">Lieu de naissance <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('lieuNaissance') is-invalid @enderror" name="lieuNaissance" value=" {{old('lieuNaissance')}}" />
                                                @error('lieuNaissance')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('lieuNaissance') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="genre">Sex <span class="text-danger">*</span> :</label>
                                                    <select  name="genre" id="genre">
                                                    <option> Masculin </option>
                                                    <option> Feminin </option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="nationalite">Nationalité <span class="text-danger">*</span> : </label>
                                                <input type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" value=" {{old('nationalite')}}"/>
                                                @error('nationalite')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('nationalite') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="pere">Père <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('pere') is-invalid @enderror" name="pere" value=" {{old('pere')}}" />
                                                @error('pere')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('pere') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="mere">Mère <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('mere') is-invalid @enderror" name="mere" value=" {{old('mere')}}"/>
                                                @error('mere')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('mere') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="tuteur">Tuteur <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('tuteur') is-invalid @enderror" name="tuteur" value=" {{old('tuteur')}}"/>
                                                @error('tuteur')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('tuteur') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="phone">Téléphone <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value=" {{old('phone')}}" />
                                                @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('phone') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="form">
                                                <label for="adresse">Adresse <span class="text-danger">*</span> :</label>
                                                <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value=" {{old('adresse')}}"/>
                                                @error('adresse')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('adresse') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="input-field col s12">
                                            <label for="email">Email Tuteur <span class="text-danger">*</span> :</label>
                                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value=" {{old('email')}}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-field col s12">
                                            <textarea id="textarea2" name="description" class="materialize-textarea" data-length="120"></textarea>
                                            <label for="textarea2">Description</label>
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
                                <button class="btn btn-primary waves-effect" type="submit">Ajouter</button>
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
    <script src="/{{('assets/js/form.min.js')}}"></script>
    <script src="/{{('assets/js/bundles//multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="/{{('assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js')}}"></script>
    <script src="/{{('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@endpush


