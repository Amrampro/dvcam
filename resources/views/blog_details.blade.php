@extends('layouts.site')
@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>{{ __('Blog') }}</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Infos</li>
                </ol>
            </div>
        </div>
    </div>
    <section class="contact-section padding">
        <div class="container">
            <div class="row">
                <div class="testimonial-item">
                    <img style="width: 100%" src="{{ asset('/storage/img_blog/full_img/' . $post->image) }}" alt="">
                    <p>{{ $post->comment }} </p>
                    <div class="testi-footer">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
