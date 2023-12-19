@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="card-title">Data Produk Paket Dua</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('productpaketdua.create') }}" class="btn btn-gradient-primary btn-sm">
                                Add Data <i class="mdi mdi-loupe btn-icon-append"></i>
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Produk </th>
                                <th> Foto </th>
                                <th> Deskripsi </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produk as $item => $data)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($data->nama, 20, $end = '...') }} </td>
                                    <td> 
                                        <img src="{{ asset($data->foto) }}" style="border-radius: 0; width: 150px; height: 100px; object-fit: cover;" alt=""> 
                                    </td>
                                    <td> {{ \Illuminate\Support\Str::limit($data->deskripsi, 10, $end = '...') }} </td>
                                    <td>
                                        <form method="POST" action="{{ route('productpaketdua.destroy', $data->id) }}"
                                            onsubmit="return confirm('Hapus Data, Anda Yakin ?')">
                                            @method('DELETE')
                                            @csrf
                                            <a class="btn btn-gradient-warning btn-sm"
                                                href="{{ route('productpaketdua.edit', $data->id) }}"><i
                                                    class="mdi mdi-file-check btn-icon-append"></i>
                                            </a>
                                            <button class="btn btn-gradient-danger btn-sm"><i
                                                    class="mdi mdi-delete"></i>
                                            </button>
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
                {{ $produk->links() }}
            </div>
        </div>
    </div>
@endsection
