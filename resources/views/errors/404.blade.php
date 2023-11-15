@extends('layouts.site')
@section('title', '404 - DVCAM')
@section('content')
<section class="error-section padding">
    <div class="container">
        <div class="error-content text-center">
            <h2>404!</h2>
            <h5>Oops! Page Non Trouvé</h5>
            <p>La page que vous cherchez est indisponible.</p>
            <a href="{{url('/')}}" class="default-btn">Retour à l'accueil</a>
        </div>
    </div>
</section>
@endsection