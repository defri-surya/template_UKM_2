@extends('layouts.purple')

@section('content')
    <div class="row" id="proBanner"></div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="card-title">Youtube Video</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('youtube.edit', $data->id) }}" class="btn btn-gradient-primary btn-sm">Edit <i
                                    class="mdi mdi-loupe btn-icon-append"></i></a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Video Profile</label>
                        <div class="form-group mt-2" style="max-width: 20rem;">
                            <iframe width="500" height="280" src="{{ $data->video }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
