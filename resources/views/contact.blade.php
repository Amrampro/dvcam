@extends('layouts.site')
@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Nous Contacter</h2>
                {{-- <p>Help today because tomorrow you may be the one who <br>needs more helping!</p> --}}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <section class="contact-section padding">
        <div id="google_map"></div>
        <div class="container">
            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>NOUS CONTACTER</h3>
                        <ul>
                            <li><i class="ti-location-pin"></i> Bafoussam/Cameroun</li>
                            <li><i class="ti-mobile"></i> +237 678 48 36 05 (Whatsapp)</li>
                            <li><i class="ti-mobile"></i> +237 681 48 85 70 (Signal et appel)</li>
                            <li><i class="ti-email"></i> <a
                                    href="mailto:defendrec39estmavocation_0027@gmail.com">defendrec39estmavocation_0027@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Laisser un message</h3>
                        <p>Notre équipe vous repondra le plus tôt que possible. Temps de reponse moins de 12h.</p>
                        <form action="" method="post" id="ajax_form" class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nom" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Envoyer Message</button>
                                </div>
                            </div>
                            {{-- <div id="form-messages" class="alert" role="alert"></div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
