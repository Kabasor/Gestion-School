<div>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">-- Main</li>
            <li class="active">
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
                <ul class="ml-menu">
                    {{-- <li class="active">
                        <a href="tableau_bord1">Dashboard 1</a>
                    </li> --}}
                    {{-- <li>
                        <a href="pages/dashboard/dashboard2.html">Dashboard 2</a>
                    </li> --}}
                </ul>
            </li>
<!-- Debut des gestions des utilisateurs -->
            <li><a href="#" onClick="return false;" class="menu-toggle">
                <i data-feather="chevrons-down"></i> <span>Gestoin Utilisateurs</span>
            </a>
            <ul class="ml-menu">
                <li><a href="@route('user.index')">
                    <i class="fas fa-users"></i></i><span>Liste des utilisateurs</span> </a>
                </li>
            </ul>
<!-- Fin des gestions des utilisateurs -->

<!-- debut des gestions des comptabilité -->
            <li><a href="#" onClick="return false;" class="menu-toggle">
                <i data-feather="chevrons-down"></i> <span>Gestoin de Comptablité</span>
            </a>
            <ul class="ml-menu">
                <li><a href="@route('paiementeleve.index')">
                    <i class="fas fa-users"></i></i><span>paiement des eleves</span> </a>
                </li>
                <li><a href="@route('paiementProfesseur.index')">
                    <i class="fas fa-users"></i></i><span>paeiment professeurs</span></a>
                </li>
            </ul>
            {{-- <ul class="ml-menu">

            </ul> --}}
<!-- Fin des gestions des comptabilité -->

<!-- debut des gestions des notes -->
<li><a href="#" onClick="return false;" class="menu-toggle">
    <i data-feather="chevrons-down"></i> <span>Gestoin des notes</span>
</a>
<ul class="ml-menu">
    <li><a href="@route('note.index')">
        <i class="fas fa-users"></i></i><span>liste des notes</span> </a>
    </li>
</ul>
<!-- Fin des gestions des notes -->
<!-- debut des gestions des Emploies -->
            <li><a href="#" onClick="return false;" class="menu-toggle">
                <i data-feather="chevrons-down"></i> <span>Gestoin Emploies</span>
            </a>

            <ul class="ml-menu">
                <li><a href="@route('emploie.index')">
                    <i class="fas fa-users"></i></i><span>Liste des emploies</span> </a>
                </li>
            </ul>
            </li>
<!-- Fin des gestions des Emploies -->

<!-- debut des gestions des professeurs -->
            <li><a href="#" onClick="return false;" class="menu-toggle">
                <i data-feather="chevrons-down"></i><span>Gestoin professeurs</span>
            </a>
            <ul class="ml-menu">
                <li><a href="@route('prof.index')">
                    <i class="fas fa-chalkboard-teacher"></i><span>  Liste des professeurs</span> </a>
                </li>
            </ul>
            </li>
<!-- Fin des gestions des professeurs -->

<!-- debut des gestions des Elèves -->
           <li><a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="chevrons-down"></i> <span>Gestion Elèves</span>
                </a>
                <ul class="ml-menu">
                    <li><a href="@route('eleve.index')"> <i class="fas fa-arrow-alt-circle-right"></i>  Liste des élèves </a></li>
                    <li><a href="@route('inscription.index')"> <i class="fas fa-arrow-alt-circle-right"></i>  Inscription </a> </li>
                    <li><a href="@route('reinscription.index')"> <i class="fas fa-arrow-alt-circle-right"></i> Reinscription</a></li>
                </ul>
           </li>
<!-- Fin des gestions des Elèves -->

<!-- debut des gestions des Parametrages -->
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">

                    <i data-feather="chevrons-down"></i><span>Parametrages</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('matiere.index')}}"><i class="fas fa-chevron-right"></i> Gestion Matière</a>
                    </li>
                    <li>
                        <a href="{{route('classe.index')}}"><i class="fas fa-chevron-right"></i> Gestion Classe</a>
                    </li>
                    <li>
                        <a href="{{route('niveau.index')}}"><i class="fas fa-chevron-right"></i> Gestion Niveau</a>

                    </li>
                    <li>
                        <a href="{{route('annee.index')}}"><i class="fas fa-chevron-right"></i> Gestion Année</a>

                    </li>
                    <li>
                        <a href="{{route('fraiscolarite.index')}}"><i class="fas fa-chevron-right"></i> Frais de scolarités</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>
<!-- #END# Left Sidebar -->
