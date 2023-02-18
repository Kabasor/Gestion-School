@extends('layouts.default')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Table classes</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="mt-5" >
                        <div class="header">
                            <h2>
                                <strong>Exportable</strong> Table</h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <button class="btn-hover color-6"><a href=" {{route('matiere.create')}} "> Ajouter</a></button>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableExport"
                                class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Nom du matiére</th>
                                            <th>Coefficient</th>
                                            <th>Classe  </th>
                                            <th>Action  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($matieres as $matiere )
                                            <tr>
                                                <td> {{$loop->iteration}} </td>
                                                <td> {{$matiere->nom_matiere}}</td>
                                                <td> {{$matiere->coefficient}}</td>
                                                <td> {{$matiere->classe->libelle}}</td>
                                                <td >
                                                    <div class="d-flex">
                                                        {{-- <a href="{{route('matiere.show',$matiere)}}" class="btn btn-tbl-edit">
                                                            <i class="material-icons">remove_red_eye</i>
                                                        </a> --}}
                                                        <a href="{{route('matiere.edit',$matiere)}}" class="btn btn-tbl-edit">
                                                            <i class="material-icons">create</i>
                                                        </a>
                                                        <form style="display: inline" action="@route('matiere.destroy', $matiere)" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{$matiere->id}}" type="submit">
                                                                <i class="material-icons">delete_forever</i>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            </div>
        </section>
@endsection
    @push('scripts')
    <script src="{{ asset('assets/js/table.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{ asset('assets/js/pages/ui/dialogs.js')}}"></script>
    @endpush



