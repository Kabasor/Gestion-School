@extends('layouts.default')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Table Parents</h4>
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
                                <strong>Ajouter</strong> Parent</h2>
                        </div>
                        <div class="body">
                            <form action=" {{route('famille.store')}} " method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control @error('pere') is-invalide @enderror " name="pere" value="{{old('pere')}}" >
                                        <label class="form-label">Nom du pére</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mere" value="{{old('mere')}}">
                                        <label class="form-label">Nom et Prénom de mére</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="responsable" value="{{old('responsable')}}">
                                        <label class="form-label">Nom du responsable</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="numero" value="{{old('numero')}}" >
                                        <label class="form-label">numero de responsable</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="adresse" value="{{old('adresse')}}" >
                                        <label class="form-label">Adresse</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
