@extends('layouts.default')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Table Niveaux</h4>
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
                                        <button class="btn-hover color-6"><a href=" {{route('niveau.create')}} "> Ajouter</a></button>

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
                                    <th>Niveau</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($niveaux as $niveau)
                                <tr>
                                    <th scope="row">{{$loop->iteration}} </th>
                                    <td>{{$niveau->libelle}}</td>
                                    <td>{{$niveau->description}}</td>
                                    <td>
                                        <a href="{{route('niveau.edit',$niveau)}}" class="btn btn-tbl-edit">
                                            <i class="material-icons">create</i>
                                        </a>
                                        <form style="display: inline" action="@route('niveau.destroy',$niveau)" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-tbl-delete btn-sm delete-confirm" data-name="{{$niveau->id}}" type="submit">
                                                <i class="material-icons">delete_forever</i>
                                            </button>
                                        </form>
                                        {{-- <a href=" {{route('niveau.edit',$niveau->id)}} " class="mx-1"> <button class="btn fa fa-edit text-primary"></button></a>

                                        <button type="button" class="btn fa fa-trash text-danger"onclick="document.getElementById('modal-open-{{$niveau->id}}').style.display='block' " "></button>
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


