@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Link</h4> <br>
                    <form class="forms-sample" action="{{ route('linkpaketdua.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail3">Judul</label>
                            <input type="text" class="form-control" name="marketplase" placeholder="Input Url Marketplase"
                                value="{{ old('marketplase') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Judul</label>
                            <input type="text" class="form-control" name="wa" placeholder="Input WA"
                                value="{{ old('wa') }}">
                        </div>
                        

                        {{-- <div class="control-group">
                            <label class="control-label">Itenerary</label>
                            <div class="controls controls-row">
                                <input type="time" name="waktu[]" id="text1"
                                    class="span3 input-tooltip" data-original-title="Jam"
                                    data-placement="bottom" required />
                                <label class="control-label"
                                    style="margin-right: 8px; width:15px"><b>&#8211;</b></label>
                                <textarea type="text" name="kegiatan[]" id="text1" class="span6 input-tooltip"
                                    data-original-title="Masukkan kegiatan" data-placement="bottom" placeholder="kegiatan" rows="2" required></textarea>
                                <button type="button"
                                    class="btn waves-effect waves-light btn-primary btn-outline-primary btn-small"
                                    style="border-radius: 10px; margin-left: 8px; height: 48px"
                                    id="dynamic-ar"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div> --}}


                        <button type="submit" class="btn btn-gradient-info mr-2">Submit</button>
                        <a href="{{ route('link.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
