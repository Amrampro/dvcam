@extends('layouts.apk')
@section('title', 'Equipe')
@section('area', 'Notre équipe')
@section('content')
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Actions</h2>
                <a class="btn btn-info" href="{{ url('/apk/team/add') }}">Ajouter un membre</a>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table mb-none">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Rôle</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $index => $team)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img width="50px" height="50px"
                                            src="{{ asset('storage/teams' . '/' . $team->image) }}" alt=""></td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->role }}</td>
                                    <td class="actions">
                                        {{-- <a href=""><i class="fa fa-pencil"></i></a> --}}
                                        <a href="{{ url('team/' . $team->id . '/del') }}"
                                            onclick="return confirm('Voulez-vous vraiment supprimer ?')"
                                            class="btn btn-danger" style="color:#fff"><i class="fa fa-trash-o"></i>
                                            Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
