 @extends('layouts.default')

 @push('styles')
    <!-- Colorpicker Css -->
    <link href="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />
    <!-- Multi Select Css -->
    <link href="{{ asset('assets/js/bundles/multiselect/css/multi-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/form.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Table Utilisateurs</h4>
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
                                        <button class="btn-hover color-6"><a href=" {{route('user.create')}} "> Ajouter</a></button>

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

                                        @foreach ($users as $user )
                                            <tr>
                                                <td> {{$loop->iteration}} </td>
                                                <td> {{$user->matricule}} </td>
                                                <td> {{$user->nom}} </td>
                                                <td> {{$user->prenom}} </td>
                                                <td> {{$user->sexe}} </td>
                                                <td> {{$user->email}} </td>
                                                <td> {{$user->telephone}} </td>
                                                <td> {{$user->adresse}} </td>
                                                <td >
                                                    <div class="d-flex">
                                                        <a href="{{route('user.show',$user)}}" class="btn btn-tbl-edit">
                                                            <i class="material-icons">remove_red_eye</i>
                                                        </a>
                                                        <a href="{{route('user.edit',$user)}}" class="btn btn-tbl-edit">
                                                            <i class="material-icons">create</i>
                                                        </a>

                                                        <form style="display: inline" action="@route('user.destroy', $user)" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{$user->id}}" type="submit">
                                                                <i class="material-icons">delete_forever</i>
                                                            </button>
                                                        </form>
                                                        {{-- <a href="{{$user->id}}" class="btn btn-tbl-delete"class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#user" >
                                                            <i class="material-icons">delete_forever</i>
                                                        </a>
                                                        @include('components.Modals.delete') --}}
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

    <script src="{{ asset('assets/js/table.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>

    <script type="text/javascript">


    </script>


    {{-- <script src="{{ asset('assets/js/table.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{ asset('assets/js/pages/ui/dialogs.js')}}"></script> --}}
    @endpush



