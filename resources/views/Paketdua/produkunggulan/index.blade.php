@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="card-title">Produk Unggulan</h4>
                        </div>
                        @if ($produkunggulans->count() >= 3)
                            <div class="col-md-6 text-right" hidden>
                                <a href="{{ route('produkunggulan.create') }}" class="btn btn-gradient-primary btn-sm">Add
                                    Data <i class="mdi mdi-loupe btn-icon-append"></i></a>
                            </div>
                        @else
                            <div class="col-md-6 text-right">
                                <a href="{{ route('produkunggulan.create') }}" class="btn btn-gradient-primary btn-sm">Add
                                    Data <i class="mdi mdi-loupe btn-icon-append"></i></a>
                            </div>
                        @endif
                    </div>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th> Produk </th>
                                <th> Foto </th>
                                <th> Deskripsi </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produkunggulans as $item => $data)
                                <tr>
                                    <td> {{ \Illuminate\Support\Str::limit($data->nama, 20, $end = '...') }} </td>
                                    <td> <img src="{{ asset($data->foto) }}"
                                            style="border-radius: 0; width: 150px; height: 100px; object-fit: cover;"
                                            alt=""> </td>
                                    <td> {{ \Illuminate\Support\Str::limit($data->deskripsi, 10, $end = '...') }} </td>
                                    <td>
                                        <form method="POST" action="{{ route('produkunggulan.destroy', $data->id) }}"
                                            onsubmit="return confirm('Hapus Data, Anda Yakin ?')">
                                            @method('DELETE')
                                            @csrf
                                            <a class="btn btn-gradient-warning btn-sm"
                                                href="{{ route('produkunggulan.edit', $data->id) }}"><i
                                                    class="mdi mdi-file-check btn-icon-append"></i></a>
                                            {{-- <a class="btn btn-icon btn-success" href="{{ route('gallery.show', $gallery) }}"><i class="far fa-eye"></i></a> --}}
                                            <button class="btn btn-gradient-danger btn-sm"><i
                                                    class="mdi mdi-delete"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Data Masih Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
