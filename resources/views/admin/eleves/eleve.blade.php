 @extends('layouts.default')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Export Table</h4>
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
                                            <a href="{{route('eleve.create')}}" onClick="return true;">Ajouter</a>
                                        </li>
                                        {{-- <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li> --}}
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
                                            <th>pere</th>
                                            <th>mere</th>
                                            <th>tuteur</th>
                                            <th>Téléphone</th>
                                            <th>Adresse</th>
                                            <th>voir</th>
                                            <th>Action  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($eleves as $eleve )
                                            <tr>
                                                <?php $i++; ?>
                                                <td> {{$i}} </td>
                                                <td> {{$eleve->matricule}} </td>
                                                <td> {{$eleve->nationalite}} </td>
                                                <td> {{$eleve->prenom}} </td>
                                                <td> {{$eleve->pere}} </td>
                                                <td> {{$eleve->mere}} </td>
                                                <td> {{$eleve->tuteur}} </td>
                                                <td> {{$eleve->phone}} </td>
                                                <td> {{$eleve->adresse}} </td>
                                                <td>
                                                    <form method="POST" >
                                                        @csrf
                                                        <div class="preview">
                                                            <a href="{{route('eleve.show',$eleve)}}"><i class="material-icons">remove_red_eye</i></a>
                                                        </div>
                                                    </form>

                                                </td>
                                                <td >
                                                    <a href="{{route('eleve.edit',$eleve)}}"> <i class="material-icons">launch</i><span class="icon-name"></span></a>
                                                    <button type="button" class="btn fa fa-trash text-danger" onclick="document.getElementById('modale').style.display='block' " ></button>
                                                    @include('components.Modals.delete')
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>N°</th>
                                            <th>Matricule</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>pere</th>
                                            <th>mere</th>
                                            <th>tuteur</th>
                                            <th>Numero</th>
                                            <th>Adresse</th>
                                            <th>voire</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            </div>
        </section>

    @push('scripte')
    <script src="/{{('assets/js/table.min.js')}}"></script>
    <script src="/{{('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script>
    <script src="/{{('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script>
    <script src="/{{('assets/js/bundles/export-tables/jszip.min.js')}}"></script>
    <script src="/{{('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script>
    <script src="/{{('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script>
    <script src="/{{('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script>
    <script src="/{{('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script>
    <script src="/{{('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="/{{('assets/js/pages/ui/dialogs.js')}}"></script>
    @endpush
 @endsection


