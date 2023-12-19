@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row md-4">
                        <div class="col-md-6">
                            <h4 class="card-title">DATA LINK PAKET DUA</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('linkpaketdua.create') }}" class="btn btn-gradient-primary btn-sm">
                                Add Data
                                <i class="mdi mdi-loupe btn-icon-append"></i>
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> URL MARKETPLASE </th>
                                <th> URL WHATSAPP</th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($linkpaketdua as $item => $wikwik)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $wikwik->marketplase }}</td>
                                <td>{{ $wikwik->wa }}</td>
                                <td>
                                    <form method="POST" action="{{ route('linkpaketdua.destroy', $wikwik->id) }}"
                                        onsubmit="return confirm('Hapus Data, Anda Yakin ?')">
                                        @method('DELETE')
                                        @csrf
                                        <a class="btn btn-gradient-warning btn-sm"
                                            href="{{ route('linkpaketdua.edit', $wikwik->id) }}">
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
                {{ $linkpaketdua->links() }}
            </div>
        </div>
    </div>
@endsection
