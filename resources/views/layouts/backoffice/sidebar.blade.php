   <!-- Page Sidebar Start-->
   <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="{{route('dashboard')}}"><img class="blur-up lazyloaded" src="/assets/backend/images/dashboard/logo.jpg" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="/assets/backend/images/dashboard/user.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">{{auth()->user()->name}}</h6>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="{{route('dashboard')}}"><i data-feather="home"></i><span>Tableau de bord</span></a></li>
                    
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Voyages</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#"><i class="fa fa-circle"></i>Liste Voyages</a></li>
                            <li><a href="#"><i class="fa fa-circle"></i>Ajouter</a></li>
                         
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{ route('path.index') }}"><i data-feather="box"></i> <span>Trajets</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('path.index') }}"><i class="fa fa-circle"></i>Liste Trajets</a></li>
                            <li><a href="{{ route('path.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                         
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="droplet"></i><span>Réservations</span></a>
                    <li>
                        <a class="sidebar-header" href="#">
                            <i data-feather="codepen"></i>
                            <span>
                                Véhicules
                            </span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('make.index') }}"><i class="fa fa-circle"></i>Marques</a></li>
                            <li><a href="{{ route('carmodel.index') }}"><i class="fa fa-circle"></i>Modèles</a></li>
                            <li><a href="{{ route('car.index') }}"><i class="fa fa-circle"></i>Liste</a></li>
                            <li><a href="{{ route('car.create') }}"><i class="fa fa-circle"></i>Ajouter</a></li>
                        </ul>

                    </li>

                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Clients</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list.html.htm"><i class="fa fa-circle"></i>Liste Clients</a></li>
                            <li><a href="create-user.html.htm"><i class="fa fa-circle"></i>Ajouter Client</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Chauffeurs</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="list-vendor.html.htm"><i class="fa fa-circle"></i>Liste Chauffeurs</a></li>
                            <li><a href="create-vendors.html.htm"><i class="fa fa-circle"></i>Ajouter Chauffeurs</a></li>
                        </ul>
                    </li>
                    
                    <li><a class="sidebar-header" href="reports.html.htm"><i data-feather="message-circle"></i><span>Evaluations</span></a></li>
                    <li><a class="sidebar-header" href=""><i data-feather="map-pin"></i><span>Localisation</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="currency-rates.html.htm"><i class="fa fa-circle"></i>Pays</a></li>
                            <li><a href="taxes.html.htm"><i class="fa fa-circle"></i>Villes</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="reports.html.htm"><i data-feather="search"></i><span>Recherches</span></a></li>
                    <li><a class="sidebar-header" href="reports.html.htm"><i data-feather="phone"></i><span>Contact</span></a></li>
                    <li><a class="sidebar-header" href=""><i data-feather="hash"></i><span>FAQ</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="currency-rates.html.htm"><i class="fa fa-circle"></i>Ajouter</a></li>
                            <li><a href="taxes.html.htm"><i class="fa fa-circle"></i>Liste FAQ</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings"></i><span>Paramètres</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->