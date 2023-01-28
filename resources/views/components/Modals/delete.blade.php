
@if (Route::is(['annee.index']))
<form action=" {{route('annee.destroy',$annee->id)}} " method="POST" >
    @csrf
    @method('DELETE')
    <div class="modal" tabindex="-1" id="modal-open-{{$annee->id}}">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">La supréssion est définitive</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{$annee->id}}').style.display='none' " aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Est-vous sûr de vouloir suprimer</h6>
                <p> La session: {{$annee->anneescolaire}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-open-{{$annee->id}}').style.display='none' " data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Oui</button>
            </div>
        </div>
        </div>
    </div>
</form>
@endif


<!-- Debut delete Niveaux //////////////////////////////////////////////////////////////-->
@if (Route::is(['niveau.index']))
<form action=" {{route('niveau.destroy',$niveau)}} " method="POST" >
    @csrf
    @method('DELETE')
    <div class="modal" tabindex="-1" id="modal-open-{{$niveau->id}}">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">La supréssion est définitive</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{$niveau->id}}').style.display='none' " aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Est-vous sûr de vouloir suprimer</h6>
                <p> Le Niveau: {{$niveau->libelle}}  </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-open-{{$niveau->id}}').style.display='none' " data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Oui</button>
            </div>
        </div>
        </div>
    </div>
</form>
@endif


<!-- Fin delete Niveaux //////////////////////////////////////////////////////////////-->

<!-- Debut delete classe //////////////////////////////////////////////////////////////-->
@if (Route::is(['classe.index']))
<form action=" {{route('classe.destroy',$classe)}} " method="POST" >
    @csrf
    @method('DELETE')
    <div class="modal" tabindex="-1" id="modal-open-{{$classe->id}}">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">La supréssion est définitive</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{$classe->id}}').style.display='none' " aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Est-vous sûr de vouloir suprimer</h6>
                <p> Le Niveau: {{$classe->libelle}}  </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-open-{{$classe->id}}').style.display='none' " data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Oui</button>
            </div>
        </div>
        </div>
    </div>
</form>
@endif


<!-- Debut delete eleve //////////////////////////////////////////////////////////////-->
@if (Route::is(['eleve.index']))
<form action=" {{route('eleve.destroy',$eleve)}} " method="POST" >
    @csrf
    @method('DELETE')
    <div class="row clearfix js-sweetalert">
        <!-- #START# Basic Modal -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="modal fade" id="eleve" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">La supréssion est definive</h5>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Est-vous sûr de vouloir suprimer</h6>
                            <p>
                                {{$eleve->nom}}, {{$eleve->prenom}}
                                Matricule:{{$eleve->matricule}}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-info waves-effect">Suprimer</button>
                            <button type="button" class="btn btn-danger waves-effect"
                                data-bs-dismiss="modal">Anuler</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endif

<!-- Finc delete eleve //////////////////////////////////////////////////////////////-->


<!-- Debut delete prof //////////////////////////////////////////////////////////////-->

{{-- @if (Route::is(['prof.index']))
<form action=" {{route('prof.destroy',$prof)}} " method="POST" >
    @csrf
    @method('DELETE')
    <div class="row clearfix js-sweetalert">
        <!-- #START# Basic Modal -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="modal fade" id="prof" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">La supréssion est definive</h5>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Est-vous sûr de vouloir suprimer</h6>
                            <p>
                                {{$prof->nom}}, {{$prof->prenom}}
                                Matricule:{{$prof->matricule}}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-info waves-effect">Suprimer</button>
                            <button type="button" class="btn btn-danger waves-effect"
                                data-bs-dismiss="modal">Anuler</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endif --}}
<!-- fin delete prof //////////////////////////////////////////////////////////////-->

