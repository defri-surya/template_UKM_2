@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">DATA MEDIA PROFILE</h4> <br>
                    <form class="forms-sample" action="{{ route('media.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                   
                        <div class="form-group">
                            <label for="exampleInputName1">Youtube Channel</label>
                            <input type="text" name="ytb" class="form-control" id="exampleInputName1"
                                placeholder="Youtube" value="{{ old('ytb', $data->ytb) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Akun Instagram</label>
                            <input type="text" name="ig" class="form-control" id="exampleInputName1"
                                placeholder="Instagram" value="{{ old('ig', $data->ig) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Akun Facebook</label>
                            <input type="text" name="fb" class="form-control" id="exampleInputName1"
                                placeholder="Facebook" value="{{ old('fb', $data->fb) }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tik Tok</label>
                            <input type="text" name="tiktok" class="form-control" id="exampleInputName1"
                                placeholder="tiktok" value="{{ old('tiktok', $data->tiktok) }}">
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Update Data</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
