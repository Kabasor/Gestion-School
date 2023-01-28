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
                            <div class="col-sm-6 ">
                                    <div class="form-group default-select select2Style">
                                        <label>Séléctionnez le Niveau </label>
                                        <select name="niveau" id="niveau_id" class="form-control select2 @error('niveau_id') is-invalid @enderror" data-placeholder="Séléctionnez le Sexe">
                                            {{-- <select name=""  class="form-control  " placeholder="select">> --}}
                                                @foreach ($niveaux as $niveau )
                                                    <option value="{{$niveau->id}}"> {{$niveau->libelle}} </option>
                                                @endforeach
                                            {{-- </select> --}}
                                        </select>
                                        @error('niveau_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 mt-2">
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
                                            <button class="btn btn-info waves-effect" type="submit"> <i data-feather="save"></i> Enregistrer</button>
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
@push('scripts')
<script src="{{ asset('assets/js/form.min.js') }}"></script>
<script src="{{ asset('assets/js/bundles//multiselect/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/form-validation.js') }}"></script>

@endpush


