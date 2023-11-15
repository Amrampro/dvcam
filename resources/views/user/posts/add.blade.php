@extends('layouts.apk')
@section('area', 'Nouveau Post')
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
                <form class="form-bordered" action="{{ url('post/add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">Textarea<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" id="textareaDefault" name="comment"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Image</label>
                        <div class="col-md-6">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input">
                                        <i class="fa fa-file fileupload-exists"></i>
                                        <span class="fileupload-preview"></span>
                                    </div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileupload-exists">Changer</span>
                                        <span class="fileupload-new">Choisir image</span>
                                        <input type="file" accept="image/*" name="post_image" />
                                    </span>
                                    <a href="#" class="btn btn-default fileupload-exists"
                                        data-dismiss="fileupload">Rétirer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Tags</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputDefault" name="tags" data-role="tagsinput">
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