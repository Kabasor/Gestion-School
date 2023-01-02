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
                                <strong>Modifier</strong> Parent</h2>
                        </div>
                        <div class="body">
                            <form action=" {{route('famille.update',$famille)}} " method="POST" >
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control @error('pere') is-invalide @enderror" name="pere" value="{{$famille->pere}}" >
                                        <label class="form-label">Nom du pére</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="mere" value="{{$famille->mere}}" >
                                        <label class="form-label">Nom et Prénom de mére</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="responsable" value="{{$famille->responsable}}"  >
                                        <label class="form-label">Nom du responsable</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="numero" value="{{$famille->numero}}" >
                                        <label class="form-label">numero de responsable</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="adresse" value="{{$famille->adresse}}" >
                                        <label class="form-label">Adresse</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
