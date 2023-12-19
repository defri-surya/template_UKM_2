@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA PROFILE PERUSAHAAN</h4> <br>
                    <form class="forms-sample" action="{{ route('profile.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email </label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail3"
                                placeholder="Email" value="{{ old('email', $data->email) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nomor Telepon </label>
                            <input type="number" name="phone" class="form-control" id="exampleInputName1"
                                placeholder="Nomer Telpon" value="{{ old('phone', $data->phone) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Alamat</label>
                            <textarea class="form-control" id="exampleTextarea1" name="alamat"
                                rows="4">{{ old('alamat', $data->alamat) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Youtube Channel</label>
                            <input type="text" name="ytb" class="form-control" id="exampleInputName1"
                                placeholder="Youtube" value="{{ old('ytb', $data->ytb) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Akun Instagram</label>
                            <input type="text" name="ig" class="form-control" id="exampleInputName1"
                                placeholder="Instagram" value="{{ old('ig', $data->ig) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Akun Facebook</label>
                            <input type="text" name="fb" class="form-control" id="exampleInputName1"
                                placeholder="Facebook" value="{{ old('fb', $data->fb) }}">
                        </div>
                        {{-- <div class="form-group">
                            <label>Foto 1</label>
                            <input type="file" name="foto1" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <img src="{{ asset($data->foto1) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto 2</label>
                            <input type="file" name="foto2" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <img src="{{ asset($data->foto2) }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto 3</label>
                            <input type="file" name="foto3" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-secondary"
                                        type="button">Upload</button>
                                </span>
                            </div>
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <img src="{{ asset($data->foto3) }}" class="img-fluid" alt="">
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputName1">Video Profile</label>
                            <input type="text" name="video" class="form-control" id="exampleInputName1"
                                placeholder="video" value="{{ old('video', $data->video) }}">
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <iframe width="500" height="280" src="{{ $data->video }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">Update Data Profile</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Profile UKM</h4> <br>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th> Foto </th>
                                <th> Email </th>
                                <th> Telepon </th>
                                <th> Alamat </th>
                                <th> Facebook </th>
                                <th> Youtube </th>
                                <th> Instagram </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{ asset($data->foto1) }}"
                                        style="border-radius: 0; width: 30px; height: 30px; object-fit: cover;" alt="">
                                    <img src="{{ asset($data->foto2) }}"
                                        style="border-radius: 0; width: 30px; height: 30px; object-fit: cover;" alt="">
                                    <img src="{{ asset($data->foto3) }}"
                                        style="border-radius: 0; width: 30px; height: 30px; object-fit: cover;" alt="">
                                </td>
                                <td>{{ $data->email }}</td>
                                <td> {{ $data->phone }} </td>
                                <td> {{ \Illuminate\Support\Str::limit($data->alamat, 10, $end = '...') }} </td>
                                <td> {{ \Illuminate\Support\Str::limit($data->fb, 10, $end = '...') }} </td>
                                <td> {{ \Illuminate\Support\Str::limit($data->ytb, 10, $end = '...') }} </td>
                                <td> {{ \Illuminate\Support\Str::limit($data->ig, 10, $end = '...') }} </td>
                                <td> <a href="{{ route('profile.edit', $data->id) }}"
                                        class="btn btn-gradient-primary btn-sm">Edit <i
                                            class="mdi mdi-file-check btn-icon-append"></i></a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>

    </div>
@endsection
