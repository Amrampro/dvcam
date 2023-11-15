@extends('layouts.site')
@section('content')
    <div class="pager-header ">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
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
                        <h2>A propos de nous</h2>
                        <p>DEFENDRE c’est ma VOCATION est une association à but non lucratif natiionale et a base
                            communautaire qui milite depuis sa création en janvier 2020 pour la promotion, la protection et
                            la défense des droits des Minorités sexuelles et de genre en particulier des personnes
                            transgenre ainsi que leurs développement intégral sur le plan des Droits Humains ; de la Sante
                            et de l’entreprenariat jeunes au Cameroun en particulier dans la région de l’Ouest. </p>
                        <h2>Notre Vision </h2>
                        <p>DEFENDRE c’est ma VOCATION rêve d’un monde :
                            <li>dénué de toute forme de Stigmatisation, de discrimination, d’inégalité sociale et d’aucune
                                infection à VIH et Hépatites.</li>
                            <li>Ou tout le monde participe à la promotion de la santé, des Droits Humains, de
                                l’entreprenariat jeunes et de l’environnement, à la reconstruction d’un monde sans
                                discrimination, à la restauration de la paix, à un environnement sain et compatissant, où la
                                dignité humaine est respectée
                            </li>
                        </p>
                        <h2>Notre Mission</h2>
                        <p>DEFENDRE c’est ma VOCATION a pour mission principale de stimuler une réponse globale efficaces et
                            efficientes aux problèmes de santé au sein des populations les plus à risque ou marginalisées
                            dans
                            la perspective d’améliorer leur qualité de vie dans le respect de leurs droits, à la question de
                            chômage, de l’auto emploi, de lutte contre toutes formes de pauvreté, du respect des droits des
                            personnes dites vulnérables</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading mb-40">
                <h2 class="text-center">DEFENDRE c’est ma VOCATION CAMEROUN a pour but et objets: </h2>
                <h2 class="text-center"><span class="heading-border"></span></h2>
                <p>
                    <li>Une édification psychologique en vue de l’amélioration comportementale et mentale de la jeunesse
                        camerounaise nécessaire à son envol.</li>
                    <li>Une assistance totale dans le cadre de la promotion des Droits humains et de la Santé ;</li>
                    <li>Un éveil de conscience et une responsabilisation de la jeunesse camerounaise ;</li>
                    <li>De stimuler davantage l’implication des jeunes camerounais a la création d’entreprises ;</li>
                    <li>D’offrir aux jeunes camerounais, une assistance intellectuelle en matière de conception et
                        d’évaluation, de leurs projets innovants ;</li>
                    <li>D’offrir aux jeunes camerounais, une assistance dans la recherche du financement de leurs projets
                        innovants.</li>
                    <li>De réaliser toutes opérations se rattachant, directement ou indirectement, en tout ou en partie, à
                        l'une des opérations visées ci-dessus, de manière à faciliter, favoriser ou développer cette
                        jeunesse et celui des activités de l'organisation.</li>
                </p>
                <br>
                <p>
                    <span class="strong">Pour atteindre ces objectifs, DEFENDRE c’est ma VOCATION CAMEROUN développera des
                        stratégies participatives basées sur la trilogie : Voir- Juger- Agir à travers la mise en place des
                        services spécialisés constitués des personnels qualifiés pour :</span>
                    <li>La bonne marche D’une édification psychologique de la jeunesse camerounaise.</li>
                    <li>Un processus d’éveil de conscience des jeunes sur la portée du développement au niveau de la
                        promotion des droits humains, de la santé et de l’entreprenariat des jeunes en générale et des
                        personnes vulnérables en particulier dans notre pays, qui requière leur implication massive.</li>
                    <li>La formation et le Leadership ;</li>
                    <li>La mise en place d’un système efficace de gestion et d’accompagnement des projets d’affaires
                        incluant les activités d’assistance à l’élaboration des projets, d’évaluation, de pilotage, et
                        d’accompagnement dans la recherche du financement des projets porteurs de croissance économique.
                    </li>
                    <li>Le développement des activités Culturelles et sportives.</li>
                </p>
            </div>
        </div>
    </section>
    <section class="team-section bg-grey bd-bottom circle shape padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Notre équipe</h2>
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
