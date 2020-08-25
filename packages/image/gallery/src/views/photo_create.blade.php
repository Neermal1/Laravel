@extends('layouts.my_frame')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Photos</div>

                <div class="card-body">
                <form method="post" action= "{{ url('admin/photos')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image" class="col-sm-12 control-label"> Image: </label>
                            <input type="file" name="image[]" id="image" accept="image/* " class="col-sm-3 control-label" multiple>
                        @error('image')
                        <span>{{$message}}</span>
                        @enderror
               <div class="form-group">
                            <label for="caption">Caption: </label>
                            <input class="form-control" id="caption" name="caption" type="text" value="{{old('caption')}}" required>
                            @error('caption')
                            <span>{{$message}}</span>
                            @enderror
                    </select>
                         </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
