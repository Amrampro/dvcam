@extends('layouts.apk')
@section('title', 'Mes Enquêtes')
@section('area', 'Mes Enquêtes')
@section('content')
    @foreach ($enquetes as $enquete)
        <ol>
            <li>Enquête du <a href="{{ url('enquete/single/'.$enquete->id) }}">{{ $enquete->created_at }}</a></li>
        </ol>
    @endforeach
@endsection
