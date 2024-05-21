@extends('layouts.apk')
@section('title', 'Alert - tous')
@section('area', 'Tous les Alerts')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="pb-lg">Mes Alerts</h2>
            <div class="toggle" data-plugin-toggle>
                @foreach ($alerts as $alert)
                    <section class="toggle active">
                        <label>
                            @foreach ($users as $user)
                                @if ($user->id == $alert->user_id)
                                    {{ $alert->type }}/DVCAM/00{{ $alert->id }} <small class="">Par:
                                        {{ '@' . $user->name }}</small>
                                @endif
                            @endforeach
                        </label>
                        <div class="toggle-content">
                            <u><a href="{{ url('/apk/alerts/edit/' . $alert->id) }}">Modifier</a></u>
                            <p>Niveau d'alert: {{ $alert->level }}</p>
                            <p>Lieu d'alert: {{ $alert->place }}</p>
                            <p>Region :
                                @foreach ($regions as $region)
                                    @if ($alert->region == $region->id)
                                        {{ $region->name }}
                                    @endif
                                @endforeach
                            </p>
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
