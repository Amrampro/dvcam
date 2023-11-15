@extends('layouts.site')
@section('title', 'Accueil - DVCAM')
@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h4>Joignez-nous aujourd'hui</h4>
                <h1>DEFENDRE c'est ma VOCATION</h1>
                <p>Une édification psychologique en vue de l’amélioration comportementale <br>et mentale de la jeunesse
                    camerounaise nécessaire à son envol.</p>
                <a data-scroll href="#start" class="default-btn">Allons-y</a>
            </div>
        </div>
    </section>
    <section id="start" class="promo-section-2 padding bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{ asset('site') }}/img/icon-1.png" alt="prmo icon">
                        <h3>Sensibiliser des vies</h3>
                        <p>Rendre accessible et expliciter l’intervention psychologique dans la gestion de la vie</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{ asset('site') }}/img/icon-2.png" alt="prmo icon">
                        <h3>Actions Humanitaires</h3>
                        <p>Contribuer et soutenir les actions humanitaires avec d’autres acteurs philanthropiques</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{ asset('site') }}/img/icon-3.png" alt="prmo icon">
                        <h3>Toucher la population</h3>
                        <p>Intervenir auprès des populations, des organisations et des institutions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="causes-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Recent Causes</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <div class="causes-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img src="{{ asset('site') }}/img/causes-1.jpg" alt="causes">
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"><span
                                        class="wow cssanimation fadeInLeft">25%</span></div>
                            </div>
                        </div>
                        <div class="causes-details">
                            <h3>First charity activity of this summer.</h3>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img src="{{ asset('site') }}/img/causes-2.jpg" alt="causes">
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"><span
                                        class="wow cssanimation fadeInLeft">45%</span></div>
                            </div>
                        </div>
                        <div class="causes-details">
                            <h3>Big charity: build school for poor children.</h3>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="causes-content">
                        <div class="causes-thumb">
                            <img src="{{ asset('site') }}/img/causes-3.jpg" alt="causes">
                            <a href="#" class="donate-btn">Donate Now<i class="ti-plus"></i></a>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"><span
                                        class="wow cssanimation fadeInLeft">75%</span></div>
                            </div>
                        </div>
                        <div class="causes-details">
                            <h3>Building clean-water system for rural poor.</h3>
                            <p>Help today because tomorrow you may be the one who needs more helping!</p>
                            <div class="donation-box">
                                <p><i class="ti-bar-chart"></i>Goal: $45000</p>
                                <p><i class="ti-thumb-up"></i>Raised: $5000</p>
                            </div>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="{{ asset('site') }}/img/logo.jpg" alt="profile">
                        <h3>YANGUEU Blondel <span>Président du conseil d'administration</span></h3>
                        <p>DEFENDRE c’est ma VOCATION est une association à but non lucratif nationale et a base
                            communautaire qui milite depuis sa création en janvier 2020 pour la promotion,...</p>
                        <img src="{{ asset('site') }}/img/sign.png" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="{{ asset('site') }}/img/history.jpg" alt="about-thumb">
                            <h3>Notre Vision</h3>
                            <p>DEFENDRE c’est ma VOCATION rêve d’un monde :
                                - Dénué de toute forme de Stigmatisation, de discrimination, d’inégalité sociale et
                                d’au...
                            </p>
                            <a href="{{ url('/about') }}#start" class="default-btn">Lire plus</a>
                        </div>
                        <div class="col-md-6 xs-padding">
                            <img src="{{ asset('site') }}/img/mission.jpg" alt="about-thumb">
                            <h3>Notre Mission</h3>
                            <p>DEFENDRE c’est ma VOCATION a pour mission principale de stimuler une réponse globale
                                efficaces et efficientes aux problèmes de santé au sein des populations les plus à risque...
                            </p>
                            <a href="{{ url('/about') }}#start" class="default-btn">Lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading col-md-6 xs-padding">
                <h2 class="text-black">Photos récentes</h2>
                <span class="heading-border"></span>
            </div>
            <div class="gallery-items row">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-sm-6 single-item branding design">
                        <div class="gallery-wrap">
                            <img src="{{ asset('storage/gallery' . '/' . $gallery->image) }}" alt="gallery">
                            <div class="hover">
                                <a class="img-popup" data-gall="galleryimg" href="{{ asset('storage/gallery' . '/' . $gallery->image) }}"><i
                                        class="ti-image"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="team-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Rencontrez notre équipe</h2>
                <span class="heading-border"></span>
                <p>Défendons aujourd'hui car demains, nous pourrions être <br> ceux qui ont besoin de plus d'aide.</p>
            </div>
            <div class="team-wrapper row">
                <div class="col-lg-12 sm-padding">
                    <div class="team-wrap row">
                        @foreach ($teams as $team)
                            <div class="col-md-3 xs-padding">
                                <div class="team-details">
                                    <img src="{{ asset('storage/teams') . '/' . $team->image }}" alt="team">
                                    <div class="hover">
                                        <h3>{{ $team->name }} <span>{{ $team->role }}</span></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-file"></i>
                        <h3 class=""><span class="counter">200</span>+</h3>
                        <h4 class="text-white">Projets</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class=""><span class="counter">10000</span>+</h3>
                        <h4 class="text-white">Personnes impactées</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">6</h3>
                        <h4 class="text-white">Partenaires</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class=""><span class="counter">669</span>+</h3>
                        <h4 class="text-white">Feedbacks Positive</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Ce que les gens disent</h2>
                <span class="heading-border"></span>
                <p>Lisez et soyez édifié par le témoignage des personnes <br> qui ont été touchées par DVCAM</p>
            </div>
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                        the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="{{ asset('site') }}/img/team-1.jpg" alt="profile">
                        <h4>Jonathan Smith <span>Chef de mission</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                        the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="{{ asset('site') }}/img/team-2.jpg" alt="profile">
                        <h4>Angelina Rose <span>Animateur</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                        the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="{{ asset('site') }}/img/team-3.jpg" alt="profile">
                        <h4>Taylor Swift <span>Logisticien humanitaire</span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                        the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="{{ asset('site') }}/img/team-4.jpg" alt="profile">
                        <h4>Michel Brown <span>Responsable géographique</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Recent Stories</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{ asset('site') }}/img/home-blog-1.jpg" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                    <h3><a href="#">The History of Donation Told</a></h3>
                                    <p>The secret to happiness lies in helping others. Never underestimate the difference
                                        YOU can make in the lives of the poor, the abused and the helpless.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{ asset('site') }}/img/home-blog-2.jpg" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                    <h3><a href="#">Help the Comunity</a></h3>
                                    <p>The secret to happiness lies in helping others. Never underestimate the difference
                                        YOU can make in the lives of the poor, the abused and the helpless.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 padding-15">
                            <div class="blog-post">
                                <img src="{{ asset('site') }}/img/home-blog-3.jpg" alt="blog post">
                                <div class="blog-content">
                                    <span class="date"><i class="fa fa-clock-o"></i> January 01.2021</span>
                                    <h3><a href="#">Charity Ever Rule the World?</a></h3>
                                    <p>The secret to happiness lies in helping others. Never underestimate the difference
                                        YOU can make in the lives of the poor, the abused and the helpless.</p>
                                    <a href="#" class="post-meta">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <div class="sponsor-section bd-bottom">
        <div class="container">
            <ul id="sponsor-carousel" class="sponsor-items owl-carousel">
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-1.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-2.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-3.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-4.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-5.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-6.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-7.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-8.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-9.jpg" alt="sponsor-image">
                </li>
                <li class="sponsor-item">
                    <img src="{{ asset('site') }}/img/partners/partner-10.jpg" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div>
@endsection
