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
                    <h4 class="card-title">Add Produk</h4> <br>
                    <form class="forms-sample" action="{{ route('product.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail3">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" placeholder="Input Nama Produk"
                                value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Harga Produk</label>
                            <input type="text" class="form-control" name="harga" placeholder="Input Harga Produk"
                                value="{{ old('harga') }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail3">Kategori Produk</label>
                            <select class="form-control" name="kategori_id" id="kategori_id">
                                <option>-- Pilih Kategori --</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div> --}}
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
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto2" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto3" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Deskripsi Produk</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"
                                placeholder="Masukkan Deskripsi Produk">{{ old('deskripsi') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-gradient-info mr-2">Simpan</button>
                        <a href="{{ route('product.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
