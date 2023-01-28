@extends('layouts.default')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Table Année</h4>
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
                                    <button class="btn-hover color-6" data-bs-toggle="modal"
                                    data-bs-target=".Ajouter-annee"> Ajouter</a></button>
                                    @include('admin.annees.add-annee')
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
                                    <th>Année Scolaire</th>
                                    <th>Date debut</th>
                                    <th>Date fin</th>
                                    <th>Description</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($annees as $annee)
                                <tr>

<<<<<<< HEAD
                                    <th scope="row">{{ $loop->iteration }} </th>
                                    <td>{{ $annee->anneescolaire }}</td>
=======
                                    <th scope="row">{{$loop->iteration}} </th>
                                    <td>{{$annee->anneescolaire}}</td>
                                    <td>{{$annee->date_debut}}</td>
                                    <td>{{$annee->date_fin}}</td>
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
                                    <td>{{$annee->description}}</td>
                                    <td>
                                        @include('admin.annees.edit-annee')
                                        <a href="{{route('annee.edit',$annee)}}" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <form style="display: inline" action="@route('annee.destroy', $annee)" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{$annee->id}}" type="submit">
                                                <i class="material-icons">delete_forever</i>
                                            </button>
                                        </form>
                                        {{-- <button type="button" class="btn fa fa-edit text-primary" data-bs-toggle="modal"data-bs-target=".modification-{{$annee->id}}"></button> --}}
                                        {{-- <a href=" {{route('annee.edit',$annee->id)}} " class="mx-1"> <button class="btn fa fa-edit text-primary"></button></a>


                                        <button type="button" class="btn fa fa-trash text-danger"onclick="document.getElementById('modal-open-{{$annee->id}}').style.display='block' " "></button> --}}
                                        @include('components.Modals.delete')
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- #END# Basic Table -->
</section>
@endsection




