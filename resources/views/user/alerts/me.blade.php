@extends('layouts.apk')
@section('title', 'Mes Alerts')
@section('area', 'Mes Alerts')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="pb-lg">Mes Alerts</h2>
            <div class="toggle" data-plugin-toggle>
                @foreach ($alerts as $alert)
                    <section class="toggle">
                        <label>{{ $alert->type }}</label>
                        <div class="toggle-content">
                            <p>Niveau d'alert: {{ $alert->level }}</p>
                            <p>Lieu d'alert: {{ $alert->place }}</p>
                            <p>Type d'alert: {{ $alert->type }}</p>
                            <p>Auteur de l'alert: {{ $alert->author }}</p>
                            <p>Description: {{ $alert->description }}</p>
                            <p></p>
                            <p>Crée le: {{ $alert->created_at }}</p>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>
    </div>
@endsection
