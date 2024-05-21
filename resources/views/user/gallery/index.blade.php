@extends('layouts.apk')
@section('title', 'Gallerie')
@section('area', 'Gallerie')
@section('content')
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Actions</h2>
                <a class="btn btn-info" href="{{ url('/apk/gallery/add') }}">Ajouter une photo</a>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table mb-none">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Posté Le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $index => $gallery)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img width="100px" height="100px"
                                            src="{{ asset('storage/gallery' . '/' . $gallery->image) }}" alt="">
                                    </td>
                                    <td>{{ $gallery->description }}</td>
                                    <td>{{ $gallery->created_at }}</td>
                                    <td class="actions">
                                        {{-- <a href=""><i class="fa fa-pencil"></i></a> --}}
                                        <a href="{{ url('gallery/' . $gallery->id . '/del') }}"
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
