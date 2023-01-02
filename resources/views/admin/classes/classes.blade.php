@extends('layouts.default')

@section('content')

<div>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                   <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Liste Classe</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Striped Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                            <h2>
                                <button id="addRow" class="btn btn-info">
                                    <i class="fa fa-plus"></i><a href=" {{route('classe.create')}} "> Ajouter</a>
                                </button>
                            </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle"
                                    data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                {{-- <ul class="dropdown-menu float-end">
                                    <li>

                                    </li>
                                </ul> --}}
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Niveau</th>
                                    <th>Classe</th>
                                    <th>Description</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                    <?php $i = 0; ?>
                                @foreach ($classes as $classe )
                                        <tr>
                                            <?php $i++; ?>
                                            <td> {{$i}} </td>
                                            <td> {{$classe->niveau->libelle}} </td>
                                            <td> {{$classe->libelle}} </td>
                                            <td> {{$classe->description}} </td>

                                            <td colspan="d-flex">
                                                    <a href=" {{route('classe.edit',$classe)}} " class="mx-1"> <button class="btn fa fa-edit text-primary"></button></a>

                                                    <button type="button" class="btn fa fa-trash text-danger"onclick="document.getElementById('modal-open-{{$classe->id}}').style.display='block' " ></button>
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
        <!-- #END# Striped Rows -->
        <!-- #END# Basic Table -->
</section>
@endsection
</div>

