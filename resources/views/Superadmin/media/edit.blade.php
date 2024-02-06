@extends('layouts.purple')

@section('css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Sosial Media Link</h4> <br>
                    <form class="forms-sample" action="{{ route('media.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">Facebook</label> <br>
                            <div class="row controls-row">
                                <div class="col-md-12">
                                    <input type="text" name="facebook" class="form-control mt-1" id="exampleInputName1"
                                        placeholder="Sosial Media Link" value="{{ $data->facebook }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Instagram</label> <br>
                            <div class="row controls-row">
                                <div class="col-md-12">
                                    <input type="text" name="instagram" class="form-control mt-1" id="exampleInputName1"
                                        placeholder="Sosial Media Link" value="{{ $data->instagram }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Twitter</label> <br>
                            <div class="row controls-row">
                                <div class="col-md-12">
                                    <input type="text" name="twitter" class="form-control mt-1" id="exampleInputName1"
                                        placeholder="Sosial Media Link" value="{{ $data->twitter }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Youtube</label> <br>
                            <div class="row controls-row">
                                <div class="col-md-12">
                                    <input type="text" name="youtube" class="form-control mt-1" id="exampleInputName1"
                                        placeholder="Sosial Media Link" value="{{ $data->youtube }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tiktok</label> <br>
                            <div class="row controls-row">
                                <div class="col-md-12">
                                    <input type="text" name="tiktok" class="form-control mt-1" id="exampleInputName1"
                                        placeholder="Sosial Media Link" value="{{ $data->tiktok }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Pinterest</label> <br>
                            <div class="row controls-row">
                                <div class="col-md-12">
                                    <input type="text" name="pinterest" class="form-control mt-1" id="exampleInputName1"
                                        placeholder="Sosial Media Link" value="{{ $data->pinterest }}">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
