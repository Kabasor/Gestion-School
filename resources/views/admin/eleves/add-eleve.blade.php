@extends('layouts.default')
@push('styles')
<link href="/{{('assets/css/form.min.css')}}" rel="stylesheet">
@endpush
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Table Eleves</h4>
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
                                <strong>Ajouter</strong> Eléve</h2>
                        </div>
                        {{-- @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                            {{Session::get('modifie_eleve')}}
                            </div>
                        @endif --}}
                        <div class="body">
                            <form action=" {{route('eleve.store')}} " method="POST" enctype="multipart/form-data">
                                @csrf
                                <h2 class="card-inside-title">Different Widths</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="matricule" placeholder="Matricule" />
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="nom" placeholder="Nom" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="prenom" placeholder="Prenom" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" class="form-control" name="dateNaissance" placeholder="Date de Naissance" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="lieuNaissance" placeholder="Lieu de Naissance" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="genre" placeholder="Sex" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="nationalite" placeholder="Nationalité" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="pere" placeholder="Nom du pere" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="mere" placeholder="Nom et Prenom de mere" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="tuteur" placeholder="Tuteur" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="phone" placeholder="Telephone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" name="email" class="validate">
                                                <label for="email">Email Tuteur</label>
                                                <span class="helper-text" data-error="Invalid Email"
                                                    data-success="Valid Email">Helper text</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-field col s12">
                                                <textarea id="textarea2" name="description" class="materialize-textarea"
                                                    data-length="120"></textarea>
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

            </div>
        </div>
    </div>
</div>
</div>
</section>

@endsection

@push('scripts')
<script src="/{{('assets/js/form.min.js')}}"></script>
@endpush
