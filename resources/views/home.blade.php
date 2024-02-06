@extends('layouts.purple')

@section('content')
    @can('isSuperadmin')
        <div class="row" id="proBanner">
        </div>
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard Super Admin
            </h3>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card mb-4 justify-content-center">
                @if ($data->logo === null)
                    <img src="{{ asset('front') }}/noimage.png"
                        style="max-width: 35%; border: 2px solid #bebbbb; border-radius: 50%">
                @else
                    <img src="{{ asset($data->logo) }}" style="max-width: 35%; border: 2px solid #bebbbb; border-radius: 5%">
                @endif
            </div>
            <div class="col-md-12 grid-margin stretch-card mb-4 justify-content-center">
                @if ($data->nama === null)
                    <h4>Not Set!</h4>
                @else
                    <h4>{{ $data->nama }}</h4>
                @endif
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ auth()->user()->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ auth()->user()->email }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    @can('isPaketdua')
        <div class="row" id="proBanner">
        </div>
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard Paket Dua
            </h3>
        </div>
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ auth()->user()->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ auth()->user()->email }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@endsection
