@extends('layouts.apk')
@section('title', 'Ajouter Therapie')
@section('area', 'Ajouter Therapie')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Ajouter</h2>
                </header>
                <div class="panel-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (Session::has('errors'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('errors') }}
                        </div>
                    @endif
                    <form class="form-bordered" action="{{ url('therapy/add') }}" method="post">
                        @csrf
                        {{-- Start modifs --}}
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Qu’est-ce qui vous a conduit à vouloir
                                suivre une thérapie aujourd’hui ?
                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="reason" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly"> Comment avez-vous géré jusqu’à
                                présent le ou les problèmes qui vous ont conduit à suivre une thérapie ?
                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="manage" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Avez-vous déjà suivi une thérapie par
                                le passé ?
                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="already_therap" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Avez-vous déjà songé à vous
                                automutiler ou à mettre fin à vos jours ?
                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="suicide" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Sur une échelle de 1à 10, où situer
                                l’impact de ce problème sur votre vie ?
                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="impact" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">A quel point vous sentez-vous lié à
                                votre entourage ?

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="tied" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Comment s’est passée votre enfance au
                                sein de votre famille ?

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="enfance" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Qu’espérez-vous accomplir avec cette
                                thérapie ?

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="expectations" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Selon vous c’est quoi une orientation
                                sexuelle et une identité sexuelle.

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="sexual_orientation" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Parlez-moi de vos expériences durant
                                l’enfance.

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="experiences" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Parlez-moi de votre prise de
                                conscience de votre différence.

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="conscience" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Parlez-moi de la phase de révélation
                                et de l’acceptation.

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="revelation" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Parlez-moi de votre situation
                                familiale.

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="situation" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Parlez-moi de la divulgation de
                                l’orientation sexuelle.

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="divulgation" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Parlez-moi de comment vous pensez
                                que votre entourage perçoit votre différence.


                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="perception" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Parlez-moi de la stigmatisation /
                                discrimination dont vous pensez être victime.

                            </label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="stigmatisation" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        {{-- End modifs --}}
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-info" id="inputDefault" value="Envoyer">
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
