@extends('layouts.apk')
@section('title', 'Toutes les Thérapies')
@section('area', 'Toutes les Thérapies')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="pb-lg">Mes Thérapies</h2>
            <div class="toggle" data-plugin-toggle>
                @foreach ($theraps as $therap)
                    <section class="toggle">
                        <label>{{ $therap->created_at }} De
                            @foreach ($users as $user)
                                @if ($user->id = $therap->user_id)
                                    <small class="">Par: {{ '@' . $user->name }}</small>
                                @endif
                            @endforeach
                        </label>
                        <div class="toggle-content">
                            <p><i>Qu’est-ce qui vous a conduit à vouloir
                                    suivre une thérapie aujourd’hui ?:</i> {{ $therap->reason }}</p>
                            <p><i>Comment avez-vous géré jusqu’à
                                    présent le ou les problèmes qui vous ont conduit à suivre une thérapie
                                    ?</i> {{ $therap->manage }}</p>
                            <p><i>Avez-vous déjà suivi une thérapie par
                                    le passé ?</i> {{ $therap->already_therap }}</p>
                            <p><i>Avez-vous déjà songé à vous
                                    automutiler ou à mettre fin à vos jours ?</i> {{ $therap->suicide }}</p>
                            <p><i>Sur une échelle de 1à 10, où situer
                                    l’impact de ce problème sur votre vie ?</i> {{ $therap->impact }}</p>
                            <p><i>A quel point vous sentez-vous lié à
                                    votre entourage ?</i> {{ $therap->tied }}</p>
                            <p><i>Comment s’est passée votre enfance au
                                    sein de votre famille ?</i> {{ $therap->enfance }}</p>
                            <p><i>Qu’espérez-vous accomplir avec cette
                                    thérapie ?</i> {{ $therap->expectations }}</p>
                            <p><i>Selon vous c’est quoi une orientation
                                    sexuelle et une identité sexuelle.</i> {{ $therap->sexual_orientation }}</p>
                            <p><i>Parlez-moi de vos expériences durant
                                    l’enfance.</i> {{ $therap->experiences }}</p>
                            <p><i>Parlez-moi de votre prise de
                                    conscience de votre différence.</i> {{ $therap->conscience }}</p>
                            <p><i>Parlez-moi de la phase de révélation
                                    et de l’acceptation.</i> {{ $therap->revelation }}</p>
                            <p><i>Parlez-moi de votre situation
                                    familiale.</i> {{ $therap->situation }}</p>
                            <p><i>Parlez-moi de la divulgation de
                                    l’orientation sexuelle.</i> {{ $therap->divulgation }}</p>
                            <p><i>Parlez-moi de comment vous pensez
                                    que votre entourage perçoit votre différence.</i> {{ $therap->perception }}</p>
                            <p><i>Parlez-moi de la stigmatisation /
                                    discrimination dont vous pensez être victime.</i> {{ $therap->stigmatisation }}</p>
                            <p></p>
                            <p>Crée le: {{ $therap->created_at }}</p>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>
    </div>
@endsection
