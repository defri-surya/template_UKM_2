@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
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
            </div>
        </div>

    </div>
@endsection
