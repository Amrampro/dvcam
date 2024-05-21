@extends('layouts.apk')
@section('title', 'Enquêtes')
@section('area', 'Enquêtes')
@section('content')
<style>
    .del{
        background: none;
        padding: 5px;
        border-radius: 5px;
        border: 2px solid red;
        color: red;
        transition: .5s;
    }
    .del:hover{
        background: red;
        color: #fff;
    }
    p{
        margin-bottom: 15px;
    }
</style>
    @foreach ($enquetes as $index => $enquete)

            <p>{{ $index + 1 }} - Enquête par
                @foreach ($users as $user)
                    @if ($user->id == $enquete->user_id)
                        {{ $user->name }}
                    @endif
                @endforeach
                (Date de couverture : <a href="{{ url('enquete/single/' . $enquete->id) }}"> {{ $enquete->date_cover }}</a>) 
                || 
                <a class="del" href="{{ url('enquetes/' . $enquete->id . '/' . ($page = 'admin' . '/del')) }}"
                    onclick="return confirm('Voulez-vous vraiment supprimer ?')"
                    class="on-default remove-row"><i class="fa fa-trash-o"></i> Supprimer</a>
            </p>
    @endforeach
@endsection
