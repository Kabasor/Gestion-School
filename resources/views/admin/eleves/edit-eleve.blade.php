@extends('layouts.default')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li>
                                <h4 class="page-title">Table Parents</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Modifier</strong> Parent</h2>
                        </div>
                        <div class="body">
                            <form action=" {{route('eleve.update',$eleve)}} " method="POST" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control"  name="matricule" value="{{$eleve->matricule}}" >
                                        <label class="form-label">Matricule</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nom" value="{{$eleve->nom}}">
                                        <label class="form-label">Nom</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="prenom" value="{{$eleve->prenom}}" >
                                        <label class="form-label">Prénom</label>

                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label for="genre" class="genre">Genre</label>
                                    <select class="form-control select" name="genre"  >
                                        <option value="Masculin" {{($eleve->genre =='Masulin')? 'selected': ''}} >Masculin</option>
                                        <option value="Feminin" {{($eleve->genre =='Feminin')? 'selected': ''}}>Feminin</option>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image" value="{{$eleve->image}}" >
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select name="famille" id="famille_id" class="form-control @error('famille_id') is-invalid @enderror " placeholder="select">>
                                            @foreach ($familles as $famille )
                                                <option value="{{$famille->id}}" @selected($famille->id == $eleve->famille_id)> {{$famille->pere}} </option>
                                                {{-- <option value="{{$niveau->id }}" @selected($niveau->id == $classe->niveau_id)> {{$niveau->libelle}} </option> --}}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
