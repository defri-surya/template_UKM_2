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
                    <h4 class="card-title">Edit Produk</h4> <br>
                    <form class="forms-sample" action="{{ route('produkunggulan.update', $produkunggulan->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Produk"
                                value="{{ old('nama', $produkunggulan->nama) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Harga Produk</label>
                            <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga Produk"
                                value="{{ old('harga', $produkunggulan->harga) }}">
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
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <img src="{{ asset($produkunggulan->foto) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Deskripsi Produk</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"
                                placeholder="Masukkan Deskripsi Produk">{{ old('deskripsi', $produkunggulan->deskripsi) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-gradient-info mr-2">Submit</button>
                        <a href="{{ route('produkunggulan.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
