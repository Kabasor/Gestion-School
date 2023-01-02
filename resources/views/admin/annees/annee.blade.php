@extends('layouts.default')

@section('content')

<div>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                   <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Liste Années</h4>
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
                            <strong>Multi</strong> Column</h2>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target=".Ajouter-annee">Ajouter</button>
                            @include('admin.annees.add-annee')

                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Année Scolaire</th>
                                    <th>Description</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($annees as $annee)
                                <tr>
                                    <?php $i++; ?>
                                    <th scope="row">{{$i}} </th>
                                    <td>{{$annee->name}}</td>
                                    <td>{{$annee->description}}</td>
                                    <td>
                                        @include('admin.annees.edit-annee')
                                        {{-- <a href=" {{route('annee.edit',$annee->id)}} " class="mx-1"> <button class="btn fa fa-edit text-primary"></button></a> --}}
                                        <button type="button" class="btn fa fa-edit text-primary" data-bs-toggle="modal"data-bs-target=".modification-{{$annee->id}}"></button>


                                        <button type="button" class="btn fa fa-trash text-danger"onclick="document.getElementById('modal-open-{{$annee->id}}').style.display='block' " "></button>
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
</div>


