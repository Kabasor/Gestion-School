@extends('layouts.default')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Liste des Eleves</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="pull-left">
                                <button id="addRow" class="btn btn-info">
                                    <i class="fa fa-plus"></i><a href=" {{route('eleve.create')}} "> Ajouter</a>
                                </button>
                            </h2>

                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    {{-- <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul> --}}
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table
                                    class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Matricule</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>genre</th>
                                            <th>image</th>
                                            <th>Pére</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($eleves as $eleve)
                                        <tr>
                                            <?php $i++; ?>
                                            <td>{{$i}}</td>
                                            <td>{{ $eleve->matricule}}</td>
                                            <td>{{ $eleve->nom}}</td>
                                            <td>{{ $eleve->prenom}}</td>
                                            <td>{{ $eleve->genre}}</td>
                                            <td><img src="/image/{{$eleve->image}}" width="50" height="50" /></td>
                                            <td>{{ $eleve->famille->pere}} </td>

                                            <td colspan="d-flex">
                                                <a href=" {{route('eleve.edit',$eleve)}} " class="mx-1"> <button class="btn fa fa-edit text-primary"></button></a>

                                                <button type="button" class="btn fa fa-trash text-danger"onclick="document.getElementById('modal-open-{{$eleve->id}}').style.display='block' " ></button>
                                                @include('components.Modals.delete')
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>

@push('script')
 <!-- Plugins Js -->
 <script src="/{{('assets/js/app.min.js')}}"></script>
 <script src="/{{('assets/js/table.min.js')}}"></script>
 <!-- Custom Js -->
 <script src="/{{('assets/js/admin.js')}}"></script>
 <script src="/{{('assets/js/pages/tables/jquery-datatable.js')}}"></script>
 <!-- Demo Js -->
@endpush


