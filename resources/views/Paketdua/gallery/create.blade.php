@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Gallery</h4> <br>
                    <form class="forms-sample" action="{{ route('gallery.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail3">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Input Judul Foto"
                                value="{{ old('judul') }}">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-gradient-info mr-2">Submit</button>
                        <a href="{{ route('gallery.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
