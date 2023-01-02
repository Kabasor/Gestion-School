@extends('layouts.default')
<div>
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Ajouter une classe</h4>

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
                        <h2> <strong>Classe</strong></h2>
                    </div>
                    <div class="body">

                        <form action=" {{route('classe.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form">
                                            <select name="niveau" id="niveau_id" class="form-control @error('niveau_id') is-invalid @enderror " placeholder="select">>
                                                @foreach ($niveaux as $niveau )
                                                    <option value="{{$niveau->id}}"> {{$niveau->libelle}} </option>
                                                @endforeach
                                            </select>
                                            @error('niveau_id')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('niveau_id') }}
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
                                            <input type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror " placeholder="nom de classe">
                                            @error('libelle')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('libelle') }}
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
