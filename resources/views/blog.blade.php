@extends('layouts.site')
@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>{{ __('Blog') }}</h2>
                {{-- <p>Help today because tomorrow you may be the one who <br>needs more helping!</p> --}}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>
        </div>
    </div>
    <section class="contact-section padding">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="testimonial-item">
                            <img style="width: 100%" src="{{ asset('/storage/img_blog/full_img/' . $post->image) }}"
                                alt="">
                            <p><?= substr($post->comment, 0, 70) ?> </p>
                            <a href="{{ url('blog/detail/'.$post->id) }}"><u>Lire plus...</u></a>
                            <div class="testi-footer">
                                {{-- <img src="{{ asset('site') }}/img/team-1.jpg" alt="profile"> --}}
                                {{-- <h4>Jonathan Smith <span>Chef de mission</span></h4> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>{{__("NOUS CONTACTER")}}</h3>
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
                        <h3>{{__("Laisser un message")}}</h3>
                        <p>{{__("Notre équipe vous repondra le plus tôt que possible. Temps de reponse moins de 12h.")}}</p>
                        <form action="" method="post" id="ajax_form" class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="{{__("Nom")}}" required>
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
                                    <button id="submit" class="default-btn" type="submit">{{__("Envoyer Message")}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
