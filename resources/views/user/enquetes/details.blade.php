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
                    <form class="form-horizontal" novalidate="novalidate">
                        <div class="tab-content">
                            <div id="w4-account" class="tab-pane active">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->code }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Date de Couverture</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" value="{{ $enquete->date_cove }}r}}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Type de violence</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->violence_type }}}}" id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Nature de la violence</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->nature }}}}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Identité du genre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->identity }}}}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Orientation sexuel</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->orientation }}}}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Age</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->age }}}}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Let</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->let }}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Occupation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->occupation }}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Pays</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->country }}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Ville</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->town }}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Quartier</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->quater }}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Date de l'incident</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control"
                                                value="{{ $enquete->date_incident }}" id="w4-rrr" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Lieux de l'incident</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->place_incident }}" id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Source d'information</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->source }}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Mode de collecte</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->collect_mode }}" id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Etat de passing</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->passing_state }}" id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Auteur de la violence</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{ $enquete->author }}"
                                                id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Référé pour</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->refered_for }}" id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Organisation référé</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"
                                                value="{{ $enquete->organisation }}" id="" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Détails de la violence</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $enquete->details }}"
                                            id="" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Qu'es ce qui a été fait ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $enquete->thing_done }}"
                                            id="" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Que pensez-vous de ce qui a été
                                        fait ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $enquete->thought }}"
                                            id="" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Attente de la suivante</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $enquete->waiting }}"
                                            id="" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Qu'est ce qui doit être
                                        fait</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ $enquete->thing_to_be_done }}" id="" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Service reçu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ $enquete->recieved_service }}" id="w4-cc" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Que pensez-vous du service reçu
                                        ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ $enquete->thought_service }}" id="w4-cc" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Situation actuel de/du la
                                        survivant(e)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ $enquete->thought_survivor }}" id="w4-cc" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
