@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="card-title">Your Integration Link</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('link.edit', $data->id) }}" class="btn btn-gradient-primary btn-sm">Edit <i
                                    class="mdi mdi-loupe btn-icon-append"></i></a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">URL Marketplace</label>
                        @foreach ($arrayLink as $item)
                            <input type="text" class="form-control mt-1" placeholder="Input URL Marketplace"
                                value="{{ $item }}" readonly>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">WhatsApp Admin</label>
                        <input type="text" class="form-control" placeholder="Input WhatsApp Admin"
                            value="{{ $data->wa_admin }}" readonly>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
