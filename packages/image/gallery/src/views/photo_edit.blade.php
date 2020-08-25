@extends('layouts.my_frame')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Photos</div>

                <div class="card-body">
                    <form method="POST" action= "{{ url('admin/photo_edit'.$photo->id)}}" >
                        @csrf
                        <div class="form-group">
                            <label for="image" class="col-sm-12 control-label">f Image Gallery: </label>
                            <input type="file" name="image" id="image"value="{{old('image',$photo->image)}}" accept="image/* " class="col-sm-3 control-label">
                            <img src="#" width="75" />
                        
                        @error('image')
                        <span>{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="caption">Caption: </label>
                            <input class="form-control" id="caption" name="caption" type="text" value="{{old('caption',$photo->caption)}}" required>
                            @error('caption')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
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
