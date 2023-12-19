@extends('layouts.purple')

@section('css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Integration Link</h4> <br>
                    <form class="forms-sample" action="{{ route('link.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">URL Marketplace</label> <br>
                            @foreach ($arrayLink as $item)
                                <div class="row controls-row">
                                    <div class="col-md-11">
                                        <input type="text" name="url_marketplace[]" class="form-control mt-1"
                                            id="exampleInputName1" placeholder="URL Marketplase"
                                            value="{{ old('url_marketplace', $item) }}">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button"
                                            class="btn btn-gradient-primary btn-sm mt-1 remove-input-field"
                                            style="border-radius: 10px">
                                            <i class="mdi mdi-trash-can-outline"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                            <button type="button" class="btn btn-gradient-primary btn-sm mt-1" style="border-radius: 10px"
                                id="dynamic-ar">Add<i class="mdi mdi-loupe btn-icon-append"></i></button>
                        </div>

                        <!-- Dynamic Form -->
                        <div class="control-group" id="dynamicAddRemove">
                        </div>
                        <!-- End Dynamic Form -->

                        <div class="form-group">
                            <label for="exampleInputName1">WhatsApp Admin</label>
                            <input type="text" name="url_wa" class="form-control" id="exampleInputName1"
                                placeholder="Instagram" value="{{ old('url_wa', $data->wa_admin) }}">
                        </div>

                        <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $("#dynamic-ar").click(function() {
            const nextIndex = $("#dynamicAddRemove").find("input[name='url_marketplace[]']").length;
            $("#dynamicAddRemove").append(
                '<div class="form-group controls-row"><input type="text" name="url_marketplace[]" class="form-control" id="exampleInputName1" placeholder="URL Marketplase"><button type="button" class="btn btn-gradient-primary btn-sm mt-1 remove-input-field" style="border-radius: 10px"><i class="mdi mdi-trash-can-outline"></i></button></div>'
            );
        });

        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('.controls-row').remove();
        });
    </script>
@endpush
