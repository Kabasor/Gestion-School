
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

<!-- Debut delete Famille //////////////////////////////////////////////////////////////-->
@if (Route::is(['famille.index']))
<form action=" {{route('famille.destroy',$famille)}} " method="POST" >
    @csrf
    @method('DELETE')
    <div class="modal" tabindex="-1" id="modal-open-{{$famille->id}}">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">La supréssion est définitive</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{$famille->id}}').style.display='none' " aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Est-vous sûr de vouloir suprimer</h6>
                <p> Cette Famille  </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-open-{{$famille->id}}').style.display='none' " data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Oui</button>
            </div>
        </div>
        </div>
    </div>
</form>
@endif
<!-- Fin delete Famille //////////////////////////////////////////////////////////////-->

<!-- Debut delete Famille //////////////////////////////////////////////////////////////-->
@if (Route::is(['eleve.index']))
<form action=" {{route('eleve.destroy',$eleve)}} " method="POST" >
    @csrf
    @method('DELETE')
    <div class="modal" tabindex="-1" id="modal-open-{{$eleve->id}}">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">La supréssion est définitive</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{$eleve->id}}').style.display='none' " aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Est-vous sûr de vouloir suprimer</h6>
                <p>
                    {{$eleve->nom}}, {{$eleve->prenom}}
                    Matricule:{{$eleve->matricule}}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('modal-open-{{$eleve->id}}').style.display='none' " data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Oui</button>
            </div>
        </div>
        </div>
    </div>
</form>
@endif
<!-- Fin delete Famille //////////////////////////////////////////////////////////////-->


