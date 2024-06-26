<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">
    <title>@yield('title', 'Administration DVCAM')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site') }}/img/favicon.png">

    <meta name="keywords" content="nkul, vbg, dvcam" />
    <meta name="description" content="GoulBAM Enterprises">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('apk') }}/vendor/select2/select2.css" />
    <link rel="stylesheet" href="{{ asset('apk') }}/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet"
        href="{{ asset('apk') }}/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/vendor/morris/morris.css" />
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/stylesheets/theme.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet"
        href="{{ asset('apk') }}/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('apk') }}/assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="{{ asset('apk') }}/assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="#" class="logo">
                    <img style="border-radius: 100%" src="{{ asset('site') }}/img/logo2.jpg" height="35"
                        alt="">
                    {{-- <img src="{{ asset('apk') }}/assets/images/logo.png" height="35" alt="JSOFT Admin" /> --}}
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ asset('apk') }}/assets/images/!logged-user.jpg" alt="Joseph Doe"
                                class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                            <span class="name">{{ auth()->user()->name }}</span>
                            <span class="role">{{ auth()->user()->email }}</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#"><i class="fa fa-user"></i> Mon
                                    Profil</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button role="menuitem" tabindex="-1" type="submit" class="fa fa-power-off">
                                        Déconnexion</button>
                                </form>
                                {{-- <a role="menuitem" tabindex="-1" href="{{ url('/logout') }}"><i
                                        class="fa fa-power-off"></i> Logout</a> --}}
                                {{-- <a role="menuitem" tabindex="-1" href="#"><i class="fa fa-power-off"></i>
                                    Déconnexion</a> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="{{ url('apk/index') }}">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Alertes</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="{{ url('apk/alerts/me') }}">
                                                Mes alerts
                                            </a>
                                        </li>
                                        {{-- Only for admin --}}
                                        @if (auth()->user()->role == 'admin')
                                            <li>
                                                <a href="{{ url('apk/alerts/all') }}">
                                                    Tout Voir
                                                </a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{ url('apk/alerts/add') }}">
                                                Ajouter
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Thérapies</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="{{ url('apk/therapy/me') }}">
                                                Mes thérapies
                                            </a>
                                        </li>
                                        {{-- Only for admin --}}
                                        @if (auth()->user()->role == 'admin')
                                            <li>
                                                <a href="{{ url('apk/therapy/all') }}">
                                                    Tout Voir
                                                </a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{ url('apk/therapy/add') }}">
                                                Ajouter
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                        <span>Blog</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="{{ url('apk/posts/add') }}">
                                                Ajouter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('apk/posts/me') }}">
                                                Mes articles
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('apk/posts/all') }}">
                                                Tous
                                            </a>
                                        </li>


                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa  fa-plus-square" aria-hidden="true"></i>
                                        <span>Demande refuge</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="{{ url('apk/askref/add') }}">
                                                Demander un Refuge
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('apk/askref/me') }}">
                                                Mes Demandes
                                            </a>
                                        </li>
                                        {{-- Only for admin --}}
                                        @if (auth()->user()->role == 'admin')
                                            <li>
                                                <a href="{{ url('apk/askref/all') }}">
                                                    Tous
                                                </a>
                                            </li>
                                        @endif


                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        <span>Enquête</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="{{ url('apk/enquetes/add') }}">
                                                Ajouter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('apk/enquetes/me') }}">
                                                Mes enquêtes
                                            </a>
                                        </li>
                                        {{-- Only for admin --}}
                                        @if (auth()->user()->role == 'admin')
                                            <li>
                                                <a href="{{ url('apk/enquetes/all') }}">
                                                    Tous
                                                </a>
                                            </li>
                                        @endif

                                    </ul>
                                </li>
                                {{-- Only for admin --}}
                                @if (auth()->user()->role == 'admin')
                                    <li class="nav-active">
                                        <a href="{{ url('apk/users') }}">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <span>Utilisateurs</span>
                                        </a>
                                    </li>
                                    <li class="nav-active">
                                        <a href="{{ url('apk/team') }}">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <span>Equipe</span>
                                        </a>
                                    </li>
                                    <li class="nav-active">
                                        <a href="{{ url('apk/gallery') }}">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <span>Gallerie</span>
                                        </a>
                                    </li>
                                    <li class="nav-active">
                                        <a href="{{ url('apk/pdf') }}">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            <span>Télécharger</span>
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-active">
                                    <a href="{{ url('apk/my_account') }}">
                                        <i class="fa fa-gear" aria-hidden="true"></i>
                                        <span>Mon compte</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/') }}">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                        <span><u>Visiter notre site web</u></span>
                                    </a>
                                </li>

                            </ul>
                        </nav>


                        <hr class="separator" />

                    </div>

                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2><span>@yield('area', 'Dashboard')</span></h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>User board</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i
                                class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->
                @yield('content')
                <!-- end: page -->
            </section>
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close visible-xs">
                        A propos <i class="fa fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Calendrier</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <h6>Pays</h6>
                                    <span>Cameroun</span>
                                </li>
                                <hr>
                                <li>
                                    <h6>Ville</h6>
                                    <span>Bafoussam</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Support</h6>
                            <ul>
                                <li class="status-online">
                                    <i class="fa fa-check"></i>
                                    <div class="profile-info">
                                        <span class="name"><a
                                                href="yangueublondel-DVCAM@proton.me">yangueublondel-DVCAM@proton.me</a></span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <i class="fa fa-check"></i>
                                    <div class="profile-info">
                                        <span class="name"><a
                                                href="SuportGenderGuardDVCAM.VBG@proton.me">SuportGenderGuardDVCAM.VBG@proton.me</a></span>
                                    </div>
                                </li>
                                {{-- <li class="status-online">
                                    <i class="fa fa-check"></i>
                                    <div class="profile-info">
                                        <span class="name">email2@gmail.com</span>
                                    </div>
                                </li> --}}
                                <li class="status-online">
                                    <i class="fa fa-check"></i>
                                    <div class="profile-info">
                                        <span class="name">+237 681 48 85 70 </span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <i class="fa fa-check"></i>
                                    <div class="profile-info">
                                        <span class="name">+237 678 48 36 05</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>
    </section>
    {{-- <div class="bg-danger">555</div> --}}

    <!-- Vendor -->
    <script src="{{ asset('apk') }}/assets/vendor/jquery/jquery.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('apk') }}/assets/vendor/jquery-validation/jquery.validate.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/pnotify/pnotify.custom.js"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('apk') }}/assets/vendor/jquery-autosize/jquery.autosize.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('apk') }}/vendor/select2/select2.js"></script>
    <script src="{{ asset('apk') }}/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="{{ asset('apk') }}/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('apk') }}/assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('apk') }}/assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('apk') }}/assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="{{ asset('apk') }}/assets/javascripts/forms/examples.wizard.js"></script>

    <!-- Examples -->
    <script src="{{ asset('apk') }}/javascripts/tables/examples.datatables.editable.js"></script>
</body>

</html>
