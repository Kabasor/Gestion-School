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
<<<<<<< HEAD
                    </li>
                    <li>
                        <a href="pages/dashboard/dashboard2.html">Dashboard 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="package"></i>
                    <span>Academic</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('classe.index')}}"><span class="fa fa-edit"></span> Gestion Classe</a>
                    </li>
                    <li>
                        <a href="{{route('niveau.index')}}"><span class="fa fa-edit"></span> Gestion Niveau</a>

                    </li>
                    <li>
                        <a href="{{route('annee.index')}}"><span class="fa fa-edit"></span> Gestion Année</a>

                    </li>
                    <li>
                        <a href="{{route('famille.index')}}"><span class="fa fa-edit"></span> Gestion Parents</a>

                    </li>
                </ul>
            </li>
            {{-- <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="gift"></i>
                    <span>Widgets</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/widgets/chart-widget.html">Chart Widget</a>
                    </li>
                    <li>
                        <a href="pages/widgets/data-widget.html">Data Widget</a>
                    </li>
                </ul>
            </li> --}}
=======
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

>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
           <li><a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="chevrons-down"></i> <span>Gestoin Elèves</span>
                </a>
                <ul class="ml-menu">
<<<<<<< HEAD
                    <li><a href="@route('eleve.index')"> <span>Liste des élèves</span> </a></li>
                    <li><a href="@route('inscription.index')"> <span>Inscription</span> </a></li>
                    <li><a href="@route('reinscription.index')" > <span>Réinscription</span> </a></li>

                    <li><a href="#" onClick="return false;" class="menu-toggle">
=======
                    <li><a href="@route('eleve.index')"> <i class="fas fa-arrow-alt-circle-right"></i>  Liste des élèves </a></li>
                    <li><a href="@route('inscription.index')"> <i class="fas fa-arrow-alt-circle-right"></i>  Inscription </a> </li>
                    <li><a href="@route('reinscription.index')"> <i class="fas fa-arrow-alt-circle-right"></i> Reinscription</a></li>

                    {{-- <li><a href="#" onClick="return false;" class="menu-toggle">
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
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

            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="package"></i>
                    <span>Parametres</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('frais-scolarite.index')}}"><span class="fa fa-edit"></span> Frais de scolarités</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>
<!-- #END# Left Sidebar -->
