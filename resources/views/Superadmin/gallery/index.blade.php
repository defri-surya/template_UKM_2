@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="card-title">Gallery UKM</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('gallery.create') }}" class="btn btn-gradient-primary btn-sm">
                                Add Data <i class="mdi mdi-loupe btn-icon-append"></i>
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galleries as $item => $gallery)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($gallery->judul, 20, $end = '...') }} </td>
                                    <td> 
                                        <img src="{{ asset($gallery->foto) }}" style="border-radius: 0; width: 150px; height: 100px; object-fit: cover;" alt=""> 
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('gallery.destroy', $gallery->id) }}"
                                            onsubmit="return confirm('Hapus Data, Anda Yakin ?')">
                                            @method('DELETE')
                                            @csrf
                                            <a class="btn btn-gradient-warning btn-sm" href="{{ route('gallery.edit', $gallery->id) }}">
                                                <i class="mdi mdi-file-check btn-icon-append"></i>
                                            </a>
                                            <button class="btn btn-gradient-danger btn-sm">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Data Masih Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $galleries->links() }}
            </div>
        </div>
    </div>
@endsection
