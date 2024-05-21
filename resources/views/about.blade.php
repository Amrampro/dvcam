@extends('layouts.site')
@section('content')
    <div class="pager-header ">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div>
    <section class="about-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row about-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="about-image">
                        <img src="{{ asset('site') }}/img/logo.jpg" alt="about image">
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div id="start" class="about-content">
                        <h2>{{__("A propos de nous")}}</h2>
                        <p>JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS
                            {{ __('est une association à but non lucratif sous-régionale et à base communautaire qui milite depuis sa création en janvier 2020 sous son ancien non DEFENDRE c’est ma VOCATION  pour la promotion, la protection et la défense des droits des  Féministes (personnes transgenres, de genre non conforme et ou toutes personnes s’identifiant comme Femmes)  ainsi que leurs développements intégrale sur le plan des Droits Humains ; de la Sante, de l’entreprenariat et le leadership Féministe jeune en Afrique centrale.') }}
                        </p>
                        <h2>{{__("Notre Vision")}} </h2>
                        <p>JEUNES  FEMINISTES EN ACTION POUR LES DROITS HUMAINS {{__("rêve d’un monde")}} :
                            <li>{{__("JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS se projette dans une Afrique Centrale ou la transidentité et l’égalité des genres sont reconnues et librement vécue, ou les violences et violations commises à l’endroit des Féministes sont réduites et ou complètement éliminées.")}}
                            </li>
                        </p>
                        <h2>{{__("Notre Mission")}}</h2>
                        <p>JEUNES  FEMINISTES EN ACTION POUR LES DROITS HUMAINS {{__(" a pour mission de mener des actions de plaidoyer au niveau Régional (Afrique centrale) voir international pour la prise en compte des besoins spécifiques des Féministe en Afrique Centrale")}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading mb-40">
                <h2 class="text-center mb-3">JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS {{__("a pour but et Objectifs:")}} </h2>
                <h2 class="text-center">{{__("But")}} </h2>
                <h2 class="text-center"><span class="heading-border"></span></h2>
                <p>Le But de JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS est de contribué à l’améliorer les conditions de vie des Féministes en Afrique Centrale. </p>
                <h2 class="text-center mb-3"> {{__("Objectifs")}} </h2>
                <p>JEUNES FEMINISTES EN ACTION POUR LES DROITS HUMAINS  a pour Objectifs de :  </p>
                <p>
                    <li>{{__("Vulgariser les institutions des droits de Lhomme ;
                        ")}}</li>
                    <li>{{__("Sensibiliser le public sur la connaissance et le respect des droits humains des personnes vulnérable en particulier des Féministes ;	")}} ;</li>
                    <li>{{__("Eduquer, former et communiquer sur les notions de droits humains et genre en mettant l’accent sur les droits des Féministes ;")}} ;</li>
                    <li>{{__("Plaider pour la reconnaissance et la protection des droits des Féministes en mettant l'accent sur leurs réalités uniques et les défis auxquels ellEs sont confrontées ;
                        ")}} ;</li>
                    <li>{{__("Dénoncer les cas de violences et de violation commis à l’endroit des personnes vulnérable en particulier des féministes ;
                        ")}} ;</li>
                    <li>{{__("User de la conciliation, la médiation et du dialogue entre les parties pour promouvoir, protéger et défendre les droits des Féministes ;
                        ")}}</li>
                    <li>{{__("Adresser des rapports de violences et de violations faites aux personnes vulnérables en particulier au Féministe, assortis des recommandations aux institutions des droits de Lhomme ;
                        ")}}</li>
                    <li>{{__("Créer une Alliance Féministe forte pour promouvoir, protéger et défendre l'engagement en faveur de l'égalité de genre en mettant l’accent sur l’octroi des subventions et le renforcement des capacités des associations membres et des alliés ;
                        ")}}</li>
                    <li>{{__("Mettre l'accent sur le dynamisme et l'engagement des jeunes Féministes dans la promotion des droits humains et de l'égalité de genre ; 
                        ")}}</li>
                    <li>{{__("Promouvoir l'activisme et le leadership jeune (mettant en avant la jeunesse et sa contribution active de défense des droits humains) ;
                        ")}}</li>
                    <li>{{__("Développer des programmes spécifiques visant à renforcer l'autonomisation économique des jeunes Féministes, à éliminer les obstacles à leur participation économique et à lutter contre toutes les formes de discrimination fondée sur le genre, y compris dans les domaines de l'éducation, de l'emploi, de la santé et de la représentation politique (le sexisme).

                        ")}}</li>
                </p>
                <br>
                <!-- <p>
                    <span class="strong">{{__("Pour atteindre ces objectifs")}}, DEFENDRE c’est ma VOCATION CAMEROUN {{__("développera des stratégies participatives basées sur la trilogie : Voir- Juger- Agir à travers la mise en place des services spécialisés constitués des personnels qualifiés pour")}} :</span>
                    <li>{{__("La bonne marche D'une édification psychologique de la jeunesse camerounaise.")}}</li>
                    <li>{{__("Un processus d'éveil de conscience des jeunes sur la portée du développement au niveau de la promotion, de la protection et de la défense des droits humains, de la santé et de l'entreprenariat des jeunes en générale et des personnes vulnérables en particulier dans notre pays, qui requière leur implication massive")}}.</li>
                    <li>{{__("La formation et le Leadership")}} ;</li>
                    <li>{{__("La mise en place d'un système efficace de gestion et d'accompagnement des projets d'affaires incluant les activités d'assistance à l'élaboration des projets, d'évaluation, de pilotage, et / ou d'accompagnement dans la recherche du financement des projets porteurs de croissance économique.")}}
                    </li>
                    <li>{{("Le développement des activités Culturelles et sportives.")}}</li>
                </p> -->
            </div>
        </div>
    </section>
    <section class="about-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading mb-40">
                <h2 class="text-center">
                    Valeur : 
                     </h2>
                <h2 class="text-center"><span class="heading-border"></span></h2>
                <p>JEUNESSE FEMINISTES EN ACTION POUR LES DROITS HUMAINS est d’améliorer les conditions de vie des MSG en particulier des personnes trans, intersexe et des Femmes LBQ au Cameroun en mettant en place : </p>
                <p>
                    <li>{{__("Respect : Promotion des droits humains, respect des autres dans l’établissement des liens de collaboration et valorisation de la diversité des membres.")}}</li>
                    <li>{{__("Intégrité : Promotion de l’intérêt public et des actions au service des citoyens par le transfert du savoir, du savoir-faire et du savoir être en respectant les règles de la propriété intellectuelle.")}} </li>
                    <li>{{__("Professionnalisme : Effectuer de façon constante un travail de qualité dans tous les programmes d’activités ; constituer pour les autres un modèle à suivre ; agir de manière à dépasser les normes de sa profession et à renforcer les valeurs de l’association JEUNESSE FEMINISTES EN ACTION POUR LES DROITS HUMAINS.")}}</li>
                </p>
                <br>
            </div>
        </div>
    </section>
    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>{{__("Notre équipe")}}</h2>
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
