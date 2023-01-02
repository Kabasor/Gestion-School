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
                    <li class="active">
                        <a href="tableau_bord1">Dashboard 1</a>
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
            {{-- <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="slack"></i>
                    <span>Apps</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/apps/chat.html">Chat</a>
                    </li>
                    <li>
                        <a href="pages/apps/portfolio.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="pages/apps/dragdrop.html">Drag &amp; Drop</a>
                    </li>
                    <li>
                        <a href="pages/apps/contact_list.html">Contact List</a>
                    </li>
                    <li>
                        <a href="pages/apps/contact_grid.html">Contact Grid</a>
                    </li>
                    <li>
                        <a href="pages/apps/support.html">Support</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a href="pages/apps/calendar.html">
                    <i data-feather="calendar"></i>
                    <span>Events</span>
                </a>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="aperture"></i>
                    <span>User Interface (UI)</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/ui/alerts.html">Alerts</a>
                    </li>
                    <li>
                        <a href="pages/ui/badges.html">Badges</a>
                    </li>
                    <li>
                        <a href="pages/ui/modal.html">Modal</a>
                    </li>
                    <li>
                        <a href="pages/ui/buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="pages/ui/collapse.html">Collapse</a>
                    </li>
                    <li>
                        <a href="pages/ui/dialogs.html">Dialogs</a>
                    </li>
                    <li>
                        <a href="pages/ui/cards.html">Cards</a>
                    </li>
                    <li>
                        <a href="pages/ui/labels.html">Labels</a>
                    </li>
                    <li>
                        <a href="pages/ui/list-group.html">List Group</a>
                    </li>
                    <li>
                        <a href="pages/ui/notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="pages/ui/preloaders.html">Preloaders</a>
                    </li>
                    <li>
                        <a href="pages/ui/progressbars.html">Progress Bars</a>
                    </li>
                    <li>
                        <a href="pages/ui/range-sliders.html">Range Sliders</a>
                    </li>
                    <li>
                        <a href="pages/ui/sortable-nestable.html">Sortable &amp; Nestable</a>
                    </li>
                    <li>
                        <a href="pages/ui/tabs.html">Tabs</a>
                    </li>
                    <li>
                        <a href="pages/ui/typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="pages/ui/helper-classes.html">Helper Classes</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="feather"></i>
                    <span>Icons</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/icons/material-icons.html">Material Icons</a>
                    </li>
                    <li>
                        <a href="pages/icons/font-awesome.html">Font Awesome</a>
                    </li>
                    <li>
                        <a href="pages/icons/feather.html">Feather</a>
                    </li>
                    <li>
                        <a href="pages/icons/simple-line-icons.html">Simple Line Icons</a>
                    </li>
                    <li>
                        <a href="pages/icons/themify.html">Themify Icons</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="edit"></i>
                    <span>Forms</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/forms/basic-form-elements.html">Basic Form</a>
                    </li>
                    <li>
                        <a href="pages/forms/advanced-form-elements.html">Advanced Form</a>
                    </li>
                    <li>
                        <a href="pages/forms/form-examples.html">Form Examples</a>
                    </li>
                    <li>
                        <a href="pages/forms/form-validation.html">Form Validation</a>
                    </li>
                    <li>
                        <a href="pages/forms/form-wizard.html">Form Wizard</a>
                    </li>
                    <li>
                        <a href="pages/forms/editors.html">Editors</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="grid"></i>
                    <span>Tables</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/tables/normal-tables.html">Normal Tables</a>
                    </li>
                    <li>
                        <a href="pages/tables/advance-tables.html">Advance Datatables</a>
                    </li>
                    <li>
                        <a href="pages/tables/export-table.html">Export Table</a>
                    </li>
                    <li>
                        <a href="pages/tables/child-row-table.html">Child Row Table</a>
                    </li>
                    <li>
                        <a href="pages/tables/group-table.html">Grouping</a>
                    </li>
                    <li>
                        <a href="pages/tables/editable-table.html">Editable Tables</a>
                    </li>
                </ul>
            </li>
            <li class="header">-- Chart &amp; Maps</li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="mail"></i>
                    <span>Email</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/email/inbox.html">Inbox</a>
                    </li>
                    <li>
                        <a href="pages/email/compose.html">Compose</a>
                    </li>
                    <li>
                        <a href="pages/email/view-mail.html">Read Email</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="pie-chart"></i>
                    <span>Charts</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/charts/amchart.html">amChart</a>
                    </li>
                    <li>
                        <a href="pages/charts/echart.html">Echart</a>
                    </li>
                    <li>
                        <a href="pages/charts/apexcharts.html">ApexCharts</a>
                    </li>
                    <li>
                        <a href="pages/charts/morris.html">Morris</a>
                    </li>
                    <li>
                        <a href="pages/charts/chartjs.html">ChartJS</a>
                    </li>
                    <li>
                        <a href="pages/charts/sparkline.html">Sparkline</a>
                    </li>
                    <li>
                        <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="map"></i>
                    <span>Maps</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/maps/google.html">Google Map</a>
                    </li>
                    <li>
                        <a href="pages/maps/jqvmap.html">Vector Map</a>
                    </li>
                    <li>
                        <a href="pages/maps/datamap.html">Data Map</a>
                    </li>
                </ul>
            </li>
            <li class="header">-- Extra</li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="sliders"></i>
                    <span>Timeline</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/timeline/timeline.html">Timeline 1</a>
                    </li>
                    <li>
                        <a href="pages/timeline/timeline2.html">Timeline 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="image"></i>
                    <span>Medias</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/medias/image-gallery.html">Image Gallery</a>
                    </li>
                    <li>
                        <a href="pages/medias/carousel.html">Carousel</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="user-check"></i>
                    <span>Authentication</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/examples/login-register.html">Login &amp; Register</a>
                    </li>
                    <li>
                        <a href="pages/examples/sign-in.html">Sign In</a>
                    </li>
                    <li>
                        <a href="pages/examples/sign-up.html">Sign Up</a>
                    </li>
                    <li>
                        <a href="pages/examples/forgot-password.html">Forgot Password</a>
                    </li>
                    <li>
                        <a href="pages/examples/locked.html">Locked</a>
                    </li>
                    <li>
                        <a href="pages/examples/404.html">404 - Not Found</a>
                    </li>
                    <li>
                        <a href="pages/examples/500.html">500 - Server Error</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="box"></i>
                    <span>Extra Pages</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/examples/profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="pages/examples/pricing.html">Pricing</a>
                    </li>
                    <li>
                        <a href="pages/examples/faqs.html">Faqs</a>
                    </li>
                    <li>
                        <a href="pages/examples/blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i data-feather="chevrons-down"></i>
                    <span>Multi Level Menu</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="#" onClick="return false;">
                            <span>Menu Item</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return false;">
                            <span>Menu Item - 2</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <span>Level - 2</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" onClick="return false;">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;" class="menu-toggle">
                                    <span>Level - 3</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span>Level - 4</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>
<!-- #END# Left Sidebar -->
