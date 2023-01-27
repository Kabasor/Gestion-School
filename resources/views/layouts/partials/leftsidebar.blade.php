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
            <li><a href="#" onClick="return false;" class="menu-toggle">
                <i data-feather="chevrons-down"></i> <span>Gestoin Utilisateurs</span>
            </a>
            <ul class="ml-menu">
                <li><a href="@route('user.index')">
                    <i class="fas fa-users"></i></i><span>Liste des utilisateurs</span> </a>
                </li>

            </ul>
            </li>

            <li><a href="#" onClick="return false;" class="menu-toggle">
                <i class="fas fa-chalkboard-teacher"></i> <span>Gestoin professeurs</span>
            </a>
            <ul class="ml-menu">
                <li><a href="@route('prof.index')">
                    <i class="fab fa-readme"></i><span>Liste des professeurs</span> </a>
                </li>

            </ul>
            </li>

           <li><a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="chevrons-down"></i> <span>Gestoin Elèves</span>
                </a>
                <ul class="ml-menu">
                    <li><a href="@route('eleve.index')"> <i class="fas fa-arrow-alt-circle-right"></i>  Liste des élèves </a></li>
                    <li><a href="@route('inscription.index')"> <i class="fas fa-arrow-alt-circle-right"></i>  Inscription </a> </li>
                    <li><a href="@route('reinscription.index')"> <i class="fas fa-arrow-alt-circle-right"></i> Reinscription</a></li>

                    {{-- <li><a href="#" onClick="return false;" class="menu-toggle">
                            <span>Liste des élèves</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="#" onClick="return false;"> <span>Maternelles</span>  </a></li>
                            <li><a href="#" onClick="return false;" class="menu-toggle"> <span>Level - 3</span>
                                </a>
                                <ul class="ml-menu">
                                    <li><a href="#" onClick="return false;"> <span>Level
                                                - 4</span>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
           </li>

            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    {{-- <i data-feather="package"></i> --}}
                    {{-- <i class="fas fa-cogs"></i> --}}
                    <i class="fas fa-cog"></i>
                    <span>Parametrages</span>
                </a>
                <ul class="ml-menu">
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
                        <a href="{{route('frais-scolarite.index')}}"><i class="fas fa-chevron-right"></i> Frais de scolarités</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>
<!-- #END# Left Sidebar -->
