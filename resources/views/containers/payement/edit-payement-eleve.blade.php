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
                                <h4 class="page-title">Modifier Matiéres</h4>
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
                            <form action="@route('paiementeleve.update',$paiementeleve)", method="POST">
                                @csrf
                                @method('PUT')
                                {{-- <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <div class="form-group default-select select2Style">
                                            <label class="mb-2">Séléctionnez l'eleve</label>
                                            <select class="form-control select2" name="eleve" id="eleve" data-placeholder="Séléctionnez l'eleve">
                                                @foreach ($eleves as $eleve)
                                                    <option value="{{ $eleve->id }}"  @selected(old('eleve') == $eleve->id)>

                                                        {{$eleve->matricule }} &emsp;&emsp;{{$eleve->nom . ' '. $eleve->prenom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('eleve')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group default-select select2Style">
                                            <label class="mb-2">Séléctionnez la classe</label>
                                            <select class="form-control select2" name="classe" id="classe" data-placeholder="Séléctionnez la classe">
                                                @foreach ($classes as $classe)
                                                    <option value="{{ $classe->id }}"
                                                        @selected(old('classe') == $classe->id)>
                                                        {{ $classe->libelle }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('classe')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-sm-4 mt-3">
                                        <label>Libelle : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ libelle  @error('libelle') is-invalid @enderror"
                                            name="libelle" id="libelle"
                                            value="{{$paiementeleve->libelle}}"
                                             required>
                                    </div>


                                    <div class="col-sm-4 mt-3">
                                        <label>Montant deja payé : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ montant_paye  @error('prix_montant_paye') is-invalid @enderror"
                                            name="montant_paye" id="montant_paye"
                                            value="{{$paiementeleve->montant_paye}}"
                                            required disabled>
                                    </div>
                                    <div class="col-sm-4 mt-3">
                                        <label>Dernier paiement : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ montant_paye  @error('prix_montant_paye') is-invalid @enderror"
                                            name="montant_paye" id="dernier_payement"
                                            value="{{$paiementeleve->dernier_payement}}"
                                            required>
                                    </div>

                                    <div class="col-sm-4 mt-3">
                                        <label>Montant Total  : <span class="tx-danger">*</span></label>
                                        <input type="text"
                                            class="form-control champ montant_total  @error('montant_total') is-invalid @enderror"
                                            name="montant_total" id="montant_total"
                                            value="{{$paiementeleve->montant_total}}"
                                            disabled required>
                                    </div>


                                </div>
                                <div class="row" id="info_sup"></div>
                                <div class="row" id="row_data"></div>
                                <button class="btn btn-info waves-effect" type="submit"> <i data-feather="save"></i> Enregistrer</button>
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


