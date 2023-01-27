{{-- @extends('layouts.default')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Modifier Année scolaire</h4>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> <strong>Année Scolaire</strong></h2>
                    </div>
                    <div class="body">

                        <form action=" {{route('annee.update',$annee)}}" method="post" >
                            @csrf
                            @method('PUT')

                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form">
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " value=" {{$annee->name}} " placeholder="Année Scolaire">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form">
                                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="description" id="" cols="30" rows="10"> {{$annee->description}} </textarea>
                                            @error('description')
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Multi Column -->
    </div>
</section>
@endsection --}}


{{-- <form action=" {{route('annee.update',$annee)}}" method="post" >
    @csrf
    @method('PUT')

</form> --}}
    <!-- #END# Large Modal-->


