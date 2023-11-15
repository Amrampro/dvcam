@extends('layouts.apk')
@section('area', 'Mes Posts')
@section('content')
    <style>
        .panel-body {
            color: #686868;
        }
    </style>
    <div class="col-md-12 all" data-plugin-portlet id="portlet-1">
        @foreach ($posts as $post)
            <section class="panel panel-primary" id="panel-1" data-portlet-item>
                <header class="panel-heading portlet-handler">
                    <div class="panel-actions">
                        {{ $post->created_at }}
                    </div>

                    <h2 class="panel-title">
                        @foreach ($users as $user)
                            @if ($user->id = $post->user_id)
                                <i class="">Par:
                                    {{ '@' . $user->name }}</i>
                            @endif
                        @endforeach
                    </h2>
                </header>
                <div class="panel-body">
                    {{ $post->comment }}
                    <img width="100%" src="{{ asset('storage/img_blog/full_img/' . $post->image) }}" alt="">
                </div>
                <div class="panel-footer">tags:
                    <?php
                    $tags = $post->tags;
                    $array = explode(',', $tags);
                    ?>
                    @foreach ($array as $tag)
                        <u><span>#{{$tag}}</span></u>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>
@endsection
