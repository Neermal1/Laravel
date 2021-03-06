@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Album</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('admin/albums')}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                           <div class="form-group">
                            <label for="image" class="col-sm-12 control-label"> Image: </label>
                            <input type="file" name="image[]" id="image" accept="image/* " class="col-sm-3 control-label" multiple>
                        @error('image')
                        <span>{{$message}}</span>
                        @enderror

                                    @if ($errors->has('photos'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('photos') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save Photo
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
