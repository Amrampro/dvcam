<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('apk')}}/assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('apk')}}/assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="{{asset('apk')}}/assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="{{asset('apk')}}/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('apk')}}/assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('apk')}}/assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('apk')}}/assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="{{ asset('apk') }}/assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            {{-- <a href="/" class="logo pull-left">
                <img src="{{ asset('apk') }}/assets/images/logo.png" height="54" alt="Porto Admin" />
            </a> --}}
            <h2 class="pull-left">DV<strong>CAM</strong></h2>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Création de compte</h2>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-lg">
                            <label>Nom Utilisateur</label>
                            <input name="name" type="text" class="form-control input-lg" />
                        </div>

                        <div class="form-group mb-lg">
                            <label>E-mail</label>
                            <input name="email" type="email" class="form-control input-lg" />
                        </div>

                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control input-lg" />
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Confirmer mot de passe</label>
                                    <input name="password_confirmation" type="password" class="form-control input-lg" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="AgreeTerms" name="agreeterms" type="checkbox" />
                                    <label for="AgreeTerms">Rester Connecté</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-primary hidden-xs">Continuer</button>
                                <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Continuer</button>
                            </div>
                        </div>
                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a> --}}
                        <p class="text-center">{{ __('Already registered?') }} <a href="{{ route('login') }}">Se coneceter</a>

                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-md mb-md">&copy; DVCAM Copyright 2023. All rights reserved. Made by <a
                href="https://facebook.com/goulbam">GoulBAM</a>.</p>
        </div>
    </section>
    <!-- end: page -->

    <!-- Vendor -->
    <script src="{{ asset('apk') }}/assets/vendor/jquery/jquery.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="{{ asset('apk') }}/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('apk') }}/assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('apk') }}/assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('apk') }}/assets/javascripts/theme.init.js"></script>

</body>

</html>

