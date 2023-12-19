@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Youtube Video</h4> <br>
                    <form class="forms-sample" action="{{ route('youtube.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Video Youtube</label>
                            <input type="text" name="video" class="form-control" id="exampleInputName1"
                                placeholder="video" value="{{ old('video', $data->video) }}">
                            <div class="form-group mt-2" style="max-width: 20rem;">
                                <iframe width="500" height="280" src="{{ $data->video }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Update Data</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
