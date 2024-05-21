@extends('layouts.apk')
@section('content')
    <style>
        @media only screen and (max-width: 1026px) {
            #fadeshow1 {
                display: none;
            }
        }

        @media only screen and (min-width: 1026px) {
            #fadeout1 {
                display: none;
            }
        }
    </style>
    <div id="fadeout1">
        <h3 style="color:red">"Disponible uniquement sur un ordinateur (Ou grand écran)"</h3>
        <h4>Veuillez vous connecter à cette page via un navigateur pc</h4>
    </div>

    <div id="fadeshow1">
        <h1>Selectionnez la type de donnée à télécharger</h1>
        <form action="{{ url('/apk/getpdf') }}" method="post">
            @csrf
            <select name="datatype" id="">
                <option value="Enquete">Enquêtes</option>
                <option value="Alertes">Alertes</option>
                <option value="Therapy">Thérapies</option>
                <option value="askref">Demande de refuge</option>
            </select>
            <input type="submit" value="Télécharger">
        </form>
    </div>
@endsection
