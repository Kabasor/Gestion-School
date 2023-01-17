 @extends('layouts.default')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Table Professeur</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Exportable</strong> Table</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="{{route('prof.create')}}" onClick="return true;">Ajouter</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table id="tableExport"
                                    class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Matricule</th>
                                            <th>Nom</th>
                                            <th>Prénom  </th>
                                            <th>genre</th>
                                            <th>email</th>
                                            <th>Téléphone</th>
                                            <th>Adresse</th>
                                            <th>Action  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($profs as $prof )
                                            <tr>
                                                <?php $i++; ?>
                                                <td> {{$i}} </td>
                                                <td> {{$prof->matricule}} </td>
                                                <td> {{$prof->nom}} </td>
                                                <td> {{$prof->prenom}} </td>
                                                <td> {{$prof->genre}} </td>
                                                <td> {{$prof->email}} </td>
                                                <td> {{$prof->phone}} </td>
                                                <td> {{$prof->adresse}} </td>
                                                <td >
                                                    <div class="d-flex">
                                                        <a href="{{route('prof.show',$prof)}}" class="btn btn-tbl-edit">
                                                            <i class="material-icons">remove_red_eye</i>
                                                        </a>
                                                        <a href="{{route('prof.edit',$prof)}}" class="btn btn-tbl-edit">
                                                            <i class="material-icons">create</i>
                                                        </a>
                                                        <a href="{{$prof->id}}" class="btn btn-tbl-delete"class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#prof" >
                                                            <i class="material-icons">delete_forever</i>
                                                        </a>
                                                        @include('components.Modals.delete')
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



