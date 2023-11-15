@extends('layouts.apk')
@section('title', 'Ajouter Alert')
@section('area', 'Ajouter une demande de Refuge')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Demande de refuge</h2>
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
                    <form class="form-bordered" action="{{ url('askref/add') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Avez-vous plus de 21 ans ?</label>
                            <div class="col-md-6">
                                <select name="adult" id="" class="form-control">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Où dormez-vous en ce moment ?</label>
                            <div class="col-md-6">
                                <select name="sleeping_at" id="" class="form-control">
                                    <option value="En famille">En famille</option>
                                    <option value="Chez un(e) ami(e)">Chez un(e) ami(e)</option>
                                    <option value="Dans un lieu abandonné">Dans un lieu abandonné</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Quel est votre identité de genre</label>
                            <div class="col-md-6">
                                <select name="gender" id="" class="form-control">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Trans">Trans</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Avez-vous un emploi remunéré ?</label>
                            <div class="col-md-6">
                                <select name="employment" id="" class="form-control">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Avez-vous une source de revenue ?</label>
                            <div class="col-md-6">
                                <select name="income" id="" class="form-control">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Avez-vous une formation professionnel</label>
                            <div class="col-md-6">
                                <select name="trained" id="" class="form-control">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Si oui, en quoi êtes-vous formé ?</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="training">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Pour combiens de temps avez-vous besoin d'être hebergé ?</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="training_time">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Que pouvez-vous apporter pour améliorer la qualité des services du refuge ?</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apport">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-info" id="inputDefault" value="Envoyer">
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
