@extends('layouts.default')
@push('styles')
    <link href="/{{('assets/css/form.min.css')}}" rel="stylesheet">
@endpush
@section('content')
<div>
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Mom profile</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="card-body ">
                                <div class="product-store">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="product-gallery">
                                                <div class="product-gallery-featured">
                                                    <img src="/image/{{ $eleve->image}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="product-payment-details">

                                                <h4>
                                                    <span class="matricule">Nom : </span>
                                                    <span class="matricule">{{ $eleve->nom }}</span>
                                                </h4>
                                                <h4>
                                                    <span class="matricule">Prenom : </span>
                                                    <span class="matricule">{{ $eleve->prenom }}</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <span class="matricule">Matricule : </span>
                                                        <span class="matricule">{{ $eleve->matricule }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="genre">Sex : </span>
                                                        <span class="genre">{{ $eleve->genre }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="dateNaissance">Date de naissance : </span>
                                                        <span class="dateNaissance">{{ $eleve->dateNaissance }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="name-center">Lieu de naissance : </span>
                                                        <span class="name-center">{{ $eleve->lieuNaissance }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="name-center">Nationalite : </span>
                                                        <span class="name-center">{{ $eleve->nationalite }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="name-center">Pére : </span>
                                                        <span class="name-center">{{ $eleve->pere }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="name-center">Tuteur : </span>
                                                        <span class="name-center">{{ $eleve->tuteur }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="name-center">Phone : </span>
                                                        <span class="name-center">{{ $eleve->phone }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="name-center">Email : </span>
                                                        <span class="name-center">{{ $eleve->email }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="name-center">Adresse : </span>
                                                        <span class="name-center">{{ $eleve->adresse }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="name-center">Description : </span>
                                                        <span class="name-center">{{ $eleve->description }}</span>
                                                    </li>
                                                </ul>
                                                <a href=" {{route('eleve.index')}} " class="btn btn-info waves-effect">
                                                    <i class="fas fa-list"></i>
                                                    <span>Retour</span>
                                                </a>
                                            </div>
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
</div>
@endsection
@push('scripte')
    <script src="/{{('assets/js/pages/ecommerce/product-detail.js')}}"></script>
@endpush

