@extends('layouts.apk')
@section('title', 'Détails Enquête')
@section('area', 'Détails Enquête')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <section class="panel form-wizard" id="w4">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Détails d'enquête</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal" novalidate="novalidate" method="post" action="{{ url('enquete/edit/'.$enquete->id.'/update') }}">
                        @csrf
                        <div class="tab-content">
                            <div id="w4-account" class="tab-pane active">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->code }}" name="code"
                                                >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Date de Couverture</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" value="{{ $enquete->date_cover }}"
                                                id="" name="date_cover">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Type de violence</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->violence_type }}" name="violence_type" id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Nature de la violence</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->nature }}" name="nature"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Identité du genre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->identity }}"
                                                id="" name="identity">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Orientation sexuel</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->orientation }}" name="orientation"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Age</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->age }}" name="age"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Let</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->let }}" name="let"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Occupation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->occupation }}" name="occupation"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Pays</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->country }}" name="country"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Ville</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->town }}" name="town"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Quartier</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->quater }}" name="quater"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Date de l'incident</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control"
                                                value="{{ $enquete->date_incident }}" id="w4-rrr" name="date_incident">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Lieux de l'incident</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->place_incident }}" id="" name="place_incident">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Source d'information</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->source }}" name="source"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Mode de collecte</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->collect_mode }}" id="" name="collect_mode">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Etat de passing</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->passing_state }}" id="" name="passing_state">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Auteur de la violence</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->author }}" name="author"
                                                id="" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Référé pour</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->refered_for }}" id="" name="refered_for">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Organisation référé</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->organisation }}" id="" name="organisation">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Détails de la violence</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $enquete->details }}" name="details"
                                            id="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Qu'es ce qui a été fait ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $enquete->thing_done }}" name="thing_done"
                                            id="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Que pensez-vous de ce qui a été
                                        fait ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $enquete->thought }}" name="thought"
                                            id="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Attente de la suivante</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $enquete->waiting }}" name="waiting"
                                            id="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Qu'est ce qui doit être
                                        fait</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ $enquete->thing_to_be_done }}" id="" name="thing_to_be_done">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Service reçu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ $enquete->recieved_service }}" id="w4-cc" name="recieved_service">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Que pensez-vous du service reçu
                                        ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ $enquete->thought_service }}" id="w4-cc" name="thought_service">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Situation actuel de/du la
                                        survivant(e)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ $enquete->thought_survivor }}" id="w4-cc" name="thought_survivor">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-info" id="inputDefault" value="Modifier">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
