@extends('layouts.apk')
@section('title', 'Utilisateurs')
@section('area', 'Utilisateurs')
@section('content')
    @extends('layouts.apk')
@section('title', 'Demandes')
@section('area', 'Demandes')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
            </div>

            <h2 class="panel-title">Demandes de users</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom utilisateur</th>
                        <th>Date création</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr class="gradeX">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->name }}
                                @if ($user->id == auth()->user()->id)
                                    <small>(moi)</small>
                                @endif
                            </td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="actions">
                                <a href="{{ url('user/' . $user->id . '/del') }}"
                                    onclick="return confirm('Voulez-vous vraiment supprimer ?')"
                                    class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

@endsection
