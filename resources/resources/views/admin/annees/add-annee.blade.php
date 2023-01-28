{{-- @extends('layouts.default')
<div>
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Ajouter Année scolaire</h4>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> <strong>Année Scolaire</strong></h2>
                    </div>
                    <div class="body">

                        <form action=" {{route('annee.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form">
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " placeholder="Année Scolaire">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form">
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="description" id="" cols="30" rows="10"></textarea>
                                            @error('description')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('description') }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <button type="submit" class="btn btn-primary">ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Multi Column -->
    </div>
</section>
@endsection
</div>
 --}}


 <form action=" {{route('annee.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- fade bd-example-modal-lg --}}
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="modal fade Ajouter-annee " tabindex="-1"  role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form">
                                        <input type="text" name="anneescolaire" class="form-control @error('anneescolaire') is-invalid @enderror " placeholder="Année Scolaire">
                                        @error('anneescolaire')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('anneescolaire') }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date_debut">Début de L'année <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('date_debut') is-invalid @enderror" name="date_debut" value=" {{old('date_debut')}}" />
                                    @error('date_debut')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('date_debut') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date_fin">Fin de L'année <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('date_fin') is-invalid @enderror" name="date_fin" value=" {{old('date_fin')}}" />
                                    @error('date_fin')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('date_fin') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value=" {{old('description')}}" />
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <button class="btn btn-info waves-effect" type="submit"> <i data-feather="save"></i> Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- #END# Large Modal-->
    {{-- <form action=" {{route('annee.update',$annee)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="modal fade Ajouter-annee " tabindex="-1"  role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form">
                                            <input type="text" name="annee_scolaire" class="form-control @error('annee_scolaire') is-invalid @enderror " placeholder="Année Scolaire">
                                            @error('annee_scolaire')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('annee_scolaire') }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="date_debut">Début de L'année <span class="text-danger">*</span> :</label>
                                        <input type="date" class="form-control @error('date_debut') is-invalid @enderror" name="date_debut" value=" {{old('date_debut')}}" />
                                        @error('date_debut')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('date_debut') }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="date_fin">Fin de L'année <span class="text-danger">*</span> :</label>
                                        <input type="date" class="form-control @error('date_fin') is-invalid @enderror" name="date_fin" value=" {{old('date_fin')}}" />
                                        @error('date_fin')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('date_fin') }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <button type="submit" class="btn btn-primary">ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form> --}}

