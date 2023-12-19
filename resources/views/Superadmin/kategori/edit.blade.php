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
                    <h4 class="card-title">Edit Kategori</h4> <br>
                    <form class="forms-sample" action="{{ route('kategori.update', $kategoriproduk->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail3">Kategori</label>
                            <input type="text" class="form-control" name="nama" placeholder="Input Nama Kategori"
                                value="{{ old('nama', $kategoriproduk->nama) }}">
                        </div>

                        <button type="submit" class="btn btn-gradient-info mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
