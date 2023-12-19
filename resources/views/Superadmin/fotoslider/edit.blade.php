@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FOTO SLIDER</h4> <br>
                    <form class="forms-sample" action="{{ route('fotoslider.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Foto 1</label> <br>
                            <label><b style="color:red; font-size:12px">*</b> <i>Maks 500kb</i></label>
                            <input type="file" name="foto_1"
                                class="file-upload-default @error('foto_1') is-invalid @enderror">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            @error('foto_1')
                                <div class="alert alert-danger">
                                    Maaf, Ukuran gambar tidak boleh lebih dari 500kb!
                                </div>
                            @enderror
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <img src="{{ asset($data->foto_1) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto 2</label> <br>
                            <label><b style="color:red; font-size:12px">*</b> <i>Maks 500kb</i></label>
                            <input type="file" name="foto_2"
                                class="file-upload-default @error('foto_2') is-invalid @enderror">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            @error('foto_2')
                                <div class="alert alert-danger">
                                    Maaf, Ukuran gambar tidak boleh lebih dari 500kb!
                                </div>
                            @enderror
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <img src="{{ asset($data->foto_2) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto 3</label> <br>
                            <label><b style="color:red; font-size:12px">*</b> <i>Maks 500kb</i></label>
                            <input type="file" name="foto_3"
                                class="file-upload-default @error('foto_3') is-invalid @enderror">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            @error('foto_3')
                                <div class="alert alert-danger">
                                    Maaf, Ukuran gambar tidak boleh lebih dari 500kb!
                                </div>
                            @enderror
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <img src="{{ asset($data->foto_3) }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
