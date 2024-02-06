@extends('layouts.purple')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FAQ</h4> <br>
                    @forelse ($data as $item)
                        <form class="forms-sample" action="{{ route('faq.update', $item->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleTextarea1">Pertanyaan </label>
                                <textarea class="form-control" id="exampleTextarea1" name="pertanyaan" rows="4">{{ old('pertanyaan', $item->pertanyaan) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Jawbaan </label>
                                <textarea class="form-control" id="exampleTextarea1" name="jawaban" rows="4">{{ old('jawaban', $item->jawaban) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                        </form>
                        <hr>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
