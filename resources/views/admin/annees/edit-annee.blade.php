<form action=" {{route('annee.update',$annee)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- fade bd-example-modal-lg --}}
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="modal fade modifier-annee " tabindex="-1"  role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Modification d'Année</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form">
                                        <input type="text" name="anneescolaire" class="form-control @error('anneescolaire') is-invalid @enderror" value="{{$annee->anneescolaire}}" placeholder="Année Scolaire">
                                        @error('anneescolaire')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('anneescolaire') }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date_debut">Début de L'année <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('date_debut') is-invalid @enderror" name="date_debut" value="{{$annee->date_debut}}" />
                                    @error('date_debut')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('date_debut') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date_fin">Fin de L'année <span class="text-danger">*</span> :</label>
                                    <input type="text" class="form-control @error('date_fin') is-invalid @enderror" name="date_fin" value="{{$annee->date_fin}}" />
                                    @error('date_fin')
                                        <div class="invalid-feedback">
                                            {{ $errors->first('date_fin') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span> :</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$annee->description}}" />
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <button class="btn btn-info waves-effect" type="submit"> <i data-feather="save"></i> Modifier </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- #END# Large Modal-->
