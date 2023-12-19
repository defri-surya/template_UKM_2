@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="card-title">Kategori</h4>
                        </div>
                    </div>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th> Nama </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kategoriproduks as $item => $kategori)
                                <tr>
                                    <td> {{ $kategori->nama }} </td>
                                    <td>
                                        <a class="btn btn-gradient-warning btn-sm"
                                            href="{{ route('kategori.edit', $kategori->id) }}"><i
                                                class="mdi mdi-file-check btn-icon-append"></i></a>
                                        <form method="POST" action="{{ route('kategori.destroy', $kategori->id) }}"
                                            onsubmit="return confirm('Hapus Data, Anda Yakin ?')">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-gradient-danger btn-sm"><i
                                                    class="mdi mdi-delete"></i></button>
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
                {{ $kategoriproduks->links() }}
            </div>
        </div>
        <div class="col-lg-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Kategori</h4> <br>
                    <form class="forms-sample" action="{{ route('kategori.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail3">Kategori</label>
                            <input type="text" class="form-control" name="nama" placeholder="Input Nama Kategori"
                                value="{{ old('nama') }}">
                        </div>
                        <button type="submit" class="btn btn-gradient-info mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
