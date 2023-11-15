@extends('layouts.apk')
@section('title', 'Ajouter Alert')
@section('area', 'Ajouter Alert')
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
                    <form class="form-bordered" action="{{ url('alert/add') }}" method="post">
                        @csrf
                        {{-- Start modifs --}}
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Niveau d'alert
                            </label>
                            <div class="col-md-6">
                                <input type="text" value="" name="level" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Lieux d'alert
                            </label>
                            <div class="col-md-6">
                                <input type="text" value="" name="place" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Auteur de l'alert
                            </label>
                            <div class="col-md-6">
                                <input type="text" value="" name="author" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Type d'aide
                            </label>
                            <div class="col-md-6">
                                <input type="text" value="" name="type" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputReadOnly">Description
                            </label>
                            <div class="col-md-6">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
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
