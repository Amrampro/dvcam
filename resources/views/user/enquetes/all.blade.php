@extends('layouts.apk')
@section('title', 'Mes Enquêtes')
@section('area', 'Mes Enquêtes')
@section('content')
    @foreach ($enquetes as $enquete)
        <ol>
            <li>Enquête par
                @foreach ($users as $user)
                    @if ($user->id == $enquete->user_id)
                        {{ $user->name }}
                    @endif
                @endforeach
                <a href="{{ url('enquete/single/' . $enquete->id) }}">{{ $enquete->created_at }}</a>
            </li>
        </ol>
    @endforeach
@endsection
