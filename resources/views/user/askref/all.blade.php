@extends('layouts.apk')
@section('title', 'Demandes')
@section('area', 'Demandes')
@section('content')
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
            </div>

            <h2 class="panel-title">Demandes de refuges</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date Création</th>
                        <th>Nom utilisateur</th>
                        <th>Plud de 21 ans</th>
                        <th>Lieu d'habitat actuel</th>
                        <th>Genre</th>
                        <th>Emplois remunéré</th>
                        <th>Source revenu</th>
                        <th>Formation professionel</th>
                        <th>Nom formation</th>
                        <th>Temps Hebergement</th>
                        <th>Apport</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($refuges as $index => $refuge)
                        <tr class="gradeX">
                            <td>{{ $index + 1 }}</td>
                            <th>
                                @foreach ($users as $user)
                                    @if ($user->id = $refuge->user_id)
                                        {{ '@' . $user->name }}
                                    @endif
                                @endforeach
                            </th>
                            <td>{{ $refuge->created_at }}</td>
                            <td>{{ $refuge->adult }}</td>
                            <td>{{ $refuge->sleeping_at }}</td>
                            <td>{{ $refuge->gender }}</td>
                            <td>{{ $refuge->employment }}</td>
                            <td>{{ $refuge->income }}</td>
                            <td>{{ $refuge->trained }}</td>
                            <td>{{ $refuge->training }}</td>
                            <td>{{ $refuge->training_time }}</td>
                            <td>{{ $refuge->apport }}</td>
                            <td class="actions">
                                <a href="{{ url('refuge/' . $refuge->id . '/' . ($page = 'single' . '/del')) }}"
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
