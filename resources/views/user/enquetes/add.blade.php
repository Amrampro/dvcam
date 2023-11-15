@extends('layouts.apk')
@section('title', 'Ajouter Enquête')
@section('area', 'Ajouter Enquête')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <section class="panel form-wizard" id="w4">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Ajout d'enquête</h2>
                </header>
                <div class="panel-body">
                    <div class="wizard-progress wizard-progress-lg">
                        <div class="steps-progress">
                            <div class="progress-indicator"></div>
                        </div>
                        <ul class="wizard-steps">
                            <li class="active">
                                <a href="#w4-account" data-toggle="tab"><span>1</span>FORMULAIRE DES ENQUÊTES</a>
                            </li>
                            <li>
                                <a href="#w4-profile" data-toggle="tab"><span>2</span>DOCUMENTATION DE LA VIOLENCE</a>
                            </li>
                            <li>
                                <a href="#w4-billing" data-toggle="tab"><span>3</span>SUIVI DE LA VIOLENCE</a>
                            </li>
                            <li>
                                <a href="#w4-confirm" data-toggle="tab"><span>4</span>CONFIRMATION</a>
                            </li>
                        </ul>
                    </div>
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
                    <form action="{{ url('enquetes/add') }}" method="post" class="form-horizontal" novalidate="novalidate">
                        @csrf
                        <div class="tab-content">
                            <div id="w4-account" class="tab-pane active">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Code unique</label>
                                        <div class="col-sm-9">
                                            {{-- <input type="text" class="form-control" name="code"
                                                value="{{ $code }}" disabled> --}}
                                            <input type="text" class="form-control" name="code">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Date de Couverture</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="date_cover" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Type de violence</label>
                                        <div class="col-sm-9">
                                            <select name="violence_type" id="" class="form-control">
                                                <option value="Violences physiques">Violences physiques</option>
                                                <option value="Violences psychologiques">Violences psychologiques</option>
                                                <option value="Violences sexuelles">Violences sexuelles</option>
                                                <option value="Arrestation arbitraire">Arrestation arbitraire</option>
                                                <option value="Meurtre/Assassinat">Meurtre/Assassinat</option>
                                                <option value="Refus de service et soin de santé">Refus de service et soin
                                                    de santé</option>
                                                <option value="Arnaque-chantage-Extorsion">Arnaque-chantage-Extorsion
                                                </option>
                                                <option value="Discours haineux">Discours haineux</option>
                                                <option value="Violences économique">Violences économique</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Nature de la violence</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nature" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Identité du genre</label>
                                        <div class="col-sm-9">
                                            <select name="identity" id="" class="form-control">
                                                <option value="Homme">Homme</option>
                                                <option value="Femme">Femme</option>
                                                <option value="Trans-Homme">Trans-Homme</option>
                                                <option value="Trans-Femme">Trans-Femme</option>
                                                <option value="Trans-non-binaire">Trans-non-binaire</option>
                                                <option value="Queer">Queer</option>
                                                <option value="Intersexe">Intersexe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Orientation sexuel</label>
                                        <div class="col-sm-9">
                                            <select name="orientation" id="" class="form-control">
                                                <option value="Autres">Autres</option>
                                                <option value="Lesbienne">Lesbienne</option>
                                                <option value="Gays">Gays</option>
                                                <option value="Bisexuel.les">Bisexuel.les</option>
                                                <option value="Pansexuel.les">Pansexuel.les</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Age</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="age" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Let</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="let" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Occupation</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="occupation" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Pays</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="country" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Ville</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="town" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Quartier</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="quater" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Date de l'incident</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="date_incident"
                                                id="w4-rrr" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Lieux de l'incident</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="place_incident"
                                                id="" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Source d'information</label>
                                        <div class="col-sm-9">
                                            <select name="source" id="" class="form-control">
                                                <option value="Survivant">Survivant</option>
                                                <option value="Témoin">Témoin</option>
                                                <option value="Réseau sociaux">Réseau sociaux</option>
                                                <option value="Médias">Médias</option>
                                                <option value="Auteur de l'incident">Auteur de l'incident</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Mode de collecte</label>
                                        <div class="col-sm-9">
                                            <select name="collect_mode" id="" class="form-control">
                                                <option value="Interview face à face">Interview face à face</option>
                                                <option value="Téléphone">Téléphone</option>
                                                <option value="Analyse medias">Analyse medias</option>
                                                <option value="Fouille documentaire">Fouille documentaire</option>
                                                <option value="Observation terrain">Observation terrain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Etat de passing</label>
                                        <div class="col-sm-9">
                                            <select name="passing_state" id="" class="form-control">
                                                <option value="Aucun">Aucun</option>
                                                <option value="Partiel">Partiel</option>
                                                <option value="Complèt">Complèt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Auteur de la violence</label>
                                        <div class="col-sm-9">
                                            <select name="author" id="" class="form-control">
                                                <option value="">Inconnu</option>
                                                <option value="">Membre de la famille</option>
                                                <option value="">LGBTIQ+</option>
                                                <option value="">Internaute</option>
                                                <option value="">FMO</option>
                                                <option value="">Bailleur(resse)</option>
                                                <option value="">Employeur(e)</option>
                                                <option value="">Prestataire santé</option>
                                                <option value="">Prestataire service</option>
                                                <option value="">Homme/Femme religieux(se)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Référé pour</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="refered_for" id=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-sm-3 control-label" for="">Organisation référé</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="organisation"
                                                id="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="w4-profile" class="tab-pane">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Détails de la violence</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="details" id=""
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Qu'es ce qui a été fait ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="thing_done" id=""
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Que pensez-vous de ce qui a été
                                        fait ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="thought" id=""
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Attente de la suivante</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="waiting" id=""
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Qu'est ce qui doit être
                                        fait</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="thing_to_be_done"
                                            id="" required>
                                    </div>
                                </div>
                            </div>
                            <div id="w4-billing" class="tab-pane">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Service reçu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="recieved_service"
                                            id="w4-cc" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Que pensez-vous du service reçu
                                        ?</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="thought_service" id="w4-cc"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-cc">Situation actuel de/du la
                                        survivant(e)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="thought_survivor"
                                            id="w4-cc" required>
                                    </div>
                                </div>
                            </div>
                            <div id="w4-confirm" class="tab-pane">
                                <div class="form-group">
                                    <div class="">
                                        <h2>Soumettre le formulaire</h2>
                                        <button class="btn btn-success" type="submit">Envoyer le formulaire</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <ul class="pager">
                        <li class="previous disabled">
                            <a><i class="fa fa-angle-left"></i> précédent</a>
                        </li>
                        <li class="finish hidden pull-right">
                            {{-- <a>Confirmer</a> --}}
                        </li>
                        <li class="next">
                            <a>Suivant <i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
@endsection
