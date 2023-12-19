@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="card-title">FOTO SLIDER</h4> <br>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('fotoslider.edit', $data->id) }}" class="btn btn-gradient-primary btn-sm">Edit
                                <i class="mdi mdi-loupe btn-icon-append"></i></a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto 1</label>
                        <div class="form-group mt-2" style="max-width: 20rem;">
                            <img src="{{ asset($data->foto_1) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto 2</label>
                        <div class="form-group mt-2" style="max-width: 20rem;">
                            <img src="{{ asset($data->foto_2) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto 3</label>
                        <div class="form-group mt-2" style="max-width: 20rem;">
                            <img src="{{ asset($data->foto_3) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
