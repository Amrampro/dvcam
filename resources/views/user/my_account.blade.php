@extends('layouts.apk')
@section('title', 'Mon compte')
@section('area', 'Mon compte')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (Session::has('errors'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{-- {{ $error }} --}}
                    {{ session('error') }}
                </div>
            @endif
            <form id="form" action="my_account/validate" method="post" class="form-horizontal">
                @csrf
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Modifier les informations de mon compte</h2>
                    </header>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nom d'utilisateur <span class="required">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                    placeholder="ex.: Borel" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email <span class="required">*</span></label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" value="{{ $user->email }}" name="" class="form-control"
                                        placeholder="ex.: email@email.com" disabled />
                                </div>
                            </div>
                            <div class="col-sm-9">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Téléphone <span class="required">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" name="tel" value="{{ $user->tel }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Région <span class="required">*</span></label>
                            <div class="col-sm-9">
                                <select name="region" id="" class="form-control">
                                    @foreach ($regions as $region)
                                        @if ($region->id == $user->region_id)
                                            <option value="{{ $region->id }}" selected>{{ $region->name }}</option>
                                        @else
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nouveau mot de passe </label>
                            <div class="col-sm-9">
                                <input type="password" name="new_password" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ancien mot de passe <span
                                    class="required">*</span></label>
                            <div class="col-sm-9">
                                <input type="password" name="old_password" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary">Confirmer</button>
                                <button type="reset" class="btn btn-default">Annuler</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>
        </div>
    </div>
@endsection
