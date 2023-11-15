@extends('layouts.site')
@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Gallerie d'images</h2>
                {{-- <p>Help today because tomorrow you may be the one who <br>needs more helping!</p> --}}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Gallerie</li>
                </ol>
            </div>
        </div>
    </div>
    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row">
                {{-- <ul class="gallery-filter align-center mb-30">
                    <li class="active" data-filter="*">Tous</li>
                    <li data-filter=".branding">Phsychologie</li>
                    <li data-filter=".design">Traitement</li>
                    <li data-filter=".wordpress">Ventes</li>
                    <li data-filter=".marketing">Marketing</li>
                </ul> --}}
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

                {{-- marketing wordpress are the names of Category in case in future it is used --}}
                {{-- <div class="col-lg-4 col-sm-6 single-item marketing wordpress">
                    <div class="gallery-wrap">
                        <img src="{{ asset('site') }}/img/gallery-2.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="{{ asset('site') }}/img/gallery-2.jpg"><i
                                    class="ti-image"></i></a>
                        </div>
                    </div>
                </div> --}}
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
