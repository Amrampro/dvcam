@extends('layouts.site')
@section('title', 'Accueil - DVCAM')
@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h4>{{__("Joignez-nous aujourd'hui")}}</h4>
                <h1>JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS</h1>
                <p>{{__("Contribuer a l'amélioration des conditions de vie des féministes en Afrique centrale !")}} <br>{{__("")}}</p>
                <a data-scroll href="#start" class="default-btn">{{__("Allons-y")}}</a>
            </div>
        </div>
    </section>
    <section id="start" class="promo-section-2 padding bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{ asset('site') }}/img/icon-1.png" alt="prmo icon">
                        <h3>{{__("Sensibiliser des vies")}}</h3>
                        <p>{{__("sensibilisation et protection des droits des féministes. fournir un soutien juridique aux féministes victimes de discrimination ou de violence, plaider en faveur de lois et politiques favorables aux féministes, sensibiliser le public aux problèmes auxquels les féministes sont confrontées et offrir des services de soutien psychosocial .  jouent également un rôle important dans l'autonomisation des féministes et la promotion de l'égalité des sexes dans tous les aspects de la société.")}}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{ asset('site') }}/img/icon-2.png" alt="prmo icon">
                        <h3>{{__("Actions Humanitaires")}}</h3>
                        <p>{{__("Jouer un rôle crucial en veillant à ce que les besoins spécifiques des féministes et des minorités sexuelles et de genre soient pris en compte. Cela inclut la fourniture et où l'accès à de soins de santé reproductive, la protection contre la violence sexiste, l'accès à l'éducation et à des opportunités économiques équitables. Sensibiliser les communautés aux droits des féministes et plaider en faveur de politiques humanitaires qui intègrent une perspective de genre. En outre, être impliquées dans la promotion de la participation significative des féministes dans les processus décisionnels liés à l'aide humanitaire.")}}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="{{ asset('site') }}/img/icon-3.png" alt="prmo icon">
                        <h3>{{__("Toucher la population")}}</h3>
                        <p>{{__("Jouer un rôle essentiel dans l'autonomisation des féministes au sein des populations. Organiser des programmes éducatifs pour sensibiliser les féministes à leurs droits, à la santé, à l'autonomisation économique et à la lutte contre la violence basée sur le genre. De plus, mettre en place des initiatives visant à renforcer la participation politique des féministes, à promouvoir l'égalité des sexes et à combattre les stéréotypes de genre préjudiciables. En touchant les populations, nous contribuons à créer des communautés plus inclusives et équitables pour tous.")}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="col-md-12" src="{{ asset('site') }}/img/acc1.jpg" alt="profile">
                        <h3>YANGUEU Blondel <span>{{__("Président du conseil d'administration")}}</span></h3>
                        <p>JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS {{__(" est une association à but non lucratif sous-régionale et à base communautaire qui milite depuis sa création en janvier 2020 sous son ancien non DEFENDRE c’est ma VOCATION pour la promotion,...")}}</p>
                        <img src="{{ asset('site') }}/img/sign.png" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="{{ asset('site') }}/img/acc2.jpg" alt="about-thumb">
                            <h3>Notre Vision</h3>
                            <p>JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS {{__("rêve d’un monde")}} :
                                {{ __("JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS se projette dans un Cameroun ou la transidentité est reconnue et librement vécue...") }}
                                {{-- - {{__("Dénué de toute forme de Stigmatisation, de discrimination, d’inégalité sociale et d’au...")}} --}}
                            </p>
                            <a href="{{ url('/about') }}#start" class="default-btn">{{__("Lire plus")}}</a>
                        </div>
                        <div class="col-md-6 xs-padding">
                            {{-- <img src="{{ asset('site') }}/img/mission.jpg" alt="about-thumb"> --}}
                            <img src="{{ asset('site') }}/img/acc3.jpg" alt="about-thumb">
                            <h3>Notre Mission</h3>
                            <p>JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS {{__(" a pour mission de mener des actions de plaidoyer au niveau Régional (Afrique centrale) voir international pour la prise en compte des besoins spécifiques des Féministe en Afrique Centrale")}}
                            </p>
                            <a href="{{ url('/about') }}#start" class="default-btn">{{__("Lire plus")}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading col-md-6 xs-padding">
                <h2 class="text-black">{{__("Photos récentes")}}</h2>
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
                <h2>{{__("Rencontrez notre équipe")}}</h2>
                <span class="heading-border"></span>
                <p>{{__("Défendons aujourd'hui car demains, nous pourrions être")}} <br> {{__("ceux qui ont besoin de plus d'aide.")}}</p>
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
                        <h4 class="text-white">{{__("Projets")}}</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class=""><span class="counter">10000</span>+</h3>
                        <h4 class="text-white">{{__("Personnes impactées")}}</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">6</h3>
                        <h4 class="text-white">{{__("Partenaires")}}</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class=""><span class="counter">669</span>+</h3>
                        <h4 class="text-white">{{__("Feedbacks Positive")}}</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>{{__("Ce que les gens disent")}}</h2>
                <span class="heading-border"></span>
                <p>{{__("Lisez et soyez édifié par le témoignage des personnes qui ont été touchées par JEFADH")}}</p>
            </div>
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                <div class="testimonial-item">
                    <p>En tant que membre active de la communauté LGBTIQ+ au Cameroun, je suis reconnaissant pour le travail inestimable accompli par JEFADH au quotidien en faveur des droits humains et des féministes. Leur engagement indéfectible et leurs actions concrètes à un impact significatif dans notre société. Leur détermination à promouvoir l'égalité des gens, à défendre les droits des féministes et à lutter contre les injustices est une source d'inspiration pour nous tousEs. Je suis fier de soutenir cette organisation et je continuerai à la recommander vivement.</p>
                    <div class="testi-footer">
                        <img src="{{ asset('site') }}/img/team-1.jpg" alt="profile">
                        <h4>Activistes/ leadErs communautaire trans - femme, région de l'ouest Cameroun <span></span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>En tant que bénéficiaires des actions de JEFADH ancien DÉFENDRE c'est ma VOCATION, nous sommes profondément reconnaissant pour le soutien et l'impact positif qu'ils ont eu et ont dans nos vies. Leur travail a apporté et continue d'apporter des changements concrets et significatifs, et nous  sommes fier de faire partie de cette communauté. Leur engagement envers l'égalité et la justice est une véritable source d'inspiration pour nous et pour tant d'autres. Leur travail est essentiel et mérite tout notre soutien.</p>
                    <div class="testi-footer">
                        <img src="{{ asset('site') }}/img/team-2.jpg" alt="profile">
                        <h4>Nous, bénéficiaires de JEFADH ancien DÉFENDRE c'est ma VOCATION Cameroun, région de l'ouest Cameroun <span></span></h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p>En tant qu'alliés de JEUNES FÉMINISTES EN ACTION POUR LES DROITS HUMAINS ancien DEFENDRE c'est ma VOCATION pour la promotion, la protection et la défense  des droits humains des féministes, nous sommes fiers de soutenir leur travail exceptionnel en faveur de l'égalité des gens, de la justice sociale et des droits des Femmes. Leur engagement indéfectible et leurs actions concrètes sont une source d'inspiration pour nous tous. Nous continuerons à travailler en étroite collaboration avec eux pour promouvoir un changement positif dans notre société et pour faire avancer la cause des droits humains des féministes en Afrique centrale.</p>
                    <div class="testi-footer">
                        <img src="{{ asset('site') }}/img/team-3.jpg" alt="profile">
                        <h4>Les alliéEs de JEFADH <span></span></h4>
                    </div>
                </div>
                <!-- <div class="testimonial-item">
                    <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in
                        the lives of the poor, the abused and the helpless.</p>
                    <div class="testi-footer">
                        <img src="{{ asset('site') }}/img/team-4.jpg" alt="profile">
                        <h4>Michel Brown <span>Responsable géographique</span></h4>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
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
