<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content="DynamicLayers">
    <title>@yield('title', 'DVCAM')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site') }}/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('site') }}/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/themify-icons.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/elegant-font-icons.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/elegant-line-icons.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/venobox/venobox.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/owl.carousel.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/slicknav.min.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/css-animation.min.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/nivo-slider.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/main.css">

    <link rel="stylesheet" href="{{ asset('site') }}/css/responsive.css">
    <script src="{{ asset('site') }}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div>
    <header id="header" class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="top-content-wrap row">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            <li><a href="mailto:defendrec39estmavocation.dvcam@gmail.com"><i
                                        class="ti-email"></i><span>defendrec39estmavocation.dvcam@gmail.com</span></a>
                            </li>
                            <li><a href="tel:+237681488570"><i class="ti-mobile"></i>+(237) 681 48 85 70</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 d-none d-md-block">
                        <ul class="right-info">
                            <li><a href="https://www.facebook.com/profile.php?id=100071841758639"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://x.com/CDefendre90002?s=20"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.pinterest.com/DVCAM237"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://instagram.com/defendrecest?igshid=MzNlNGNkZWQ4Mg"><i
                                        class="fa fa-instagram"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="bottom-content-wrap row">
                    <div class="col-sm-4">
                        <div class="site-branding">
                            {{-- <a href="#"><img src="{{ asset('site') }}/img/logo.png" alt="Brand"></a> --}}
                            <a href="{{ url('/') }}"><img style="width: 70px" src="{{ asset('site') }}/img/favicon.png"
                                    alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-sm-8 text-right">
                        <?php $lang = LaravelLocalization::getCurrentLocale(); ?>
                        <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li><a class="{{ '/' . $lang == request()->path() ? 'active' : '' }}"
                                    href="{{ url('/') }}">Accueil</a></li>
                            <li><a class="{{ $lang . '/about' == request()->path() ? 'active' : '' }}"
                                    href="{{ url('/about') }}">A propos</a></li>
                            <li><a class="{{ $lang . '/gallery' == request()->path() ? 'active' : '' }}"
                                    href="{{ url('/gallery') }}">Gallerie</a></li>
                            <li><a class="{{ $lang . '/contact' == request()->path() ? 'active' : '' }}"
                                    href="{{ url('/contact') }}">Contact</a></li>
                            <li>
                                @if (auth())
                                    <a href="{{ url('/apk/index') }}">Signaler une Violence</a>
                                @endif
                            </li>
                            <li>
                                <span href="#"><img class="" width="20"
                                        src="{{ asset('flag-icons-main/flags/4x3/' . $lang . '.svg') }}"
                                        alt="">
                                    {{ LaravelLocalization::getCurrentLocale() }}</span>
                                <ul>
                                    @foreach ($supportedLocales->except(LaravelLocalization::getCurrentLocale()) as $key => $locale)
                                        <li class="dropdown-item">
                                            <a class="dropdown-item-text"
                                                href="{{ LaravelLocalization::getLocalizedURL($key) }}"><img
                                                    class="" width="20"
                                                    src="{{ asset('flag-icons-main/flags/4x3/' . $key . '.svg') }}"
                                                    alt=""> {{ $locale['native'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        {{-- <a href="#" class="btn btn-info">Connexion</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-height"></div>

    @yield('content')
    <section class="widget-section padding">
        <div class="container">
            <div class="widget-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <img src="{{ asset('site') }}/img/logo-light.png" alt="logo">
                        <p>Promotion, protection et défense des droits des Minorités sexuelles et de genre en
                            particulier des personnes transgenre.</p>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/profile.php?id=100071841758639"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://x.com/CDefendre90002?s=20"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.pinterest.com/DVCAM237"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://instagram.com/defendrecest?igshid=MzNlNGNkZWQ4Mg"><i
                                        class="fa fa-instagram"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Liens utils</h3>
                        <ul class="widget-link">
                            <li><a href="{{ url('/apk/index') }}">Signaler une Violence</a>
                            </li>
                            <li><a href="{{ url('/gallery') }}">Gallerie</li>
                            <li><a href="{{ url('/about') }}">A propos</a>
                            </li>
                            <li><a href="{{ url('/contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Plus d'infos</h3>
                        <ul class="address">
                            <li> <a href="mailto:defendrec39estmavocation.dvcam@gmail.com"><i
                                        class="ti-email"></i><span>defendrec39estmavocation.dvcam@gmail.com</span></a>
                            </li>
                            <li><i class="ti-mobile"></i> +(237) 681 48 85 70</li>
                            <li><i class="ti-world"></i> www.dvcam.org</li>
                            <li><i class="ti-location-pin"></i> Bafoussam/Cameroun</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sm-padding">
                    <div class="copyright">&copy; 2023 DVCAM made by <a href="https://facebook.com/goulbam">GoulBAM
                            Enterprises</a></div>
                </div>
                <div class="col-md-6 sm-padding">
                    {{-- <ul class="footer-social">
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Report Problem</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </footer>
    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('site') }}/js/vendor/jquery-1.12.4.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/bootstrap.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/tether.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/imagesloaded.pkgd.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/owl.carousel.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/jquery.isotope.v3.0.2.js"></script>

    <script src="{{ asset('site') }}/js/vendor/smooth-scroll.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/venobox.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/jquery.ajaxchimp.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/jquery.counterup.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/jquery.waypoints.v2.0.3.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/jquery.slicknav.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/jquery.nivo.slider.pack.js"></script>

    <script src="{{ asset('site') }}/js/vendor/letteranimation.min.js"></script>

    <script src="{{ asset('site') }}/js/vendor/wow.min.js"></script>

    <script src="{{ asset('site') }}/js/contact.js"></script>

    <script src="{{ asset('site') }}/js/main.js"></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'8099da8cc8bc2a0b',t:'MTY5NTIxMDY1Ny4zOTcwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/8370c0b3/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>

</html>
