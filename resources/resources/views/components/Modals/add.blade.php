
<form action=" {{route('annee.store')}}" method="post" enctype="multipart/form-data">
@csrf
{{-- fade bd-example-modal-lg --}}
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="modal fade example " tabindex="-1"  role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
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
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " placeholder="Année Scolaire">
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
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="description" id="" cols="30" rows="10"></textarea>
                                    @error('description')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
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
                                    <button type="submit" class="btn btn-primary">ajouter</button>
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


