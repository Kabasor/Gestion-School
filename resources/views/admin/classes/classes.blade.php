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
                                    <button class="btn-hover color-6"><a href=" {{route('classe.create')}} "> Ajouter</a></button>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableExport"
                                class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                <tr>
                                    <th>N°</th>
                                    <th>Niveau</th>
                                    <th>Classe</th>
                                    <th>Description</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($classes as $classe )
                                        <tr>
                                            <td> {{$loop->iteration}} </td>
                                            <td> {{$classe->niveau->libelle}} </td>
                                            <td> {{$classe->libelle}} </td>
                                            <td> {{$classe->description}} </td>

                                            <td colspan="d-flex">
                                                <a href="{{route('classe.edit',$classe)}}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <form style="display: inline" action="@route('classe.destroy', $classe)" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{$classe->id}}" type="submit">
                                                        <i class="material-icons">delete_forever</i>
                                                    </button>
                                                </form>
                                                    {{-- <a href=" {{route('classe.edit',$classe)}} " class="mx-1"> <button class="btn fa fa-edit text-primary"></button></a>

                                                    <button type="button" class="btn fa fa-trash text-danger"onclick="document.getElementById('modal-open-{{$classe->id}}').style.display='block' " ></button>
                                                    @include('components.Modals.delete') --}}
                                            </td>

                                        </tr>
                                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Striped Rows -->
        <!-- #END# Basic Table -->
</section>
@endsection


