@extends('layouts.my_frame')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <h4 class="text-center">Update Event:</h4>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <form role="form" method="post" action="{{ url('admin/eventmanagement/'.$eventmanagement->id)}}" class="form-group"  enctype="multipart/form-data" >
                    <div class="box-body">
                        @method('patch')
                        @csrf
                        <<div class="form-group">
                            <label for="title">Title: </label>
                            <input class="form-control" id="title" name="title" type="text" value="{{old('title')}}" required>
                            @error('title')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description: </label>
                            <input class="form-control" id="description" name="description" type="text" value="{{old('description',$eventmanagement->description)}}" required>
                            @error('description')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date: </label>
                            <input class="form-control" id="start_date" name="start_date" type="Date" value="{{old('start_date',$eventmanagement->start_date)}}">
                            @error('start_date')
                            <span>{{$message}}</span>
                            @enderror
                        </div>   
                        <div class="form-group">
                            <label for="end_date">End Date: </label>
                            <input class="form-control" id="end_date" name="end_date" type="Date" value="{{old('end_date',$eventmanagement->end_date)}}">
                            @error('end_date')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="start_time">Start Time: </label>
                            <input class="form-control" id="start_time" name="start_time" type="time" value="{{old('start_time',$eventmanagement->start_time)}}">
                            @error('start_time')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="end_time">End Time: </label>
                            <input class="form-control" id="end_time" name="end_time" type="time" value="{{old('end_time',$eventmanagement->end_time)}}">
                            @error('end_time')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="organizer">Organizer: </label>
                            <input class="form-control" id="organizer" name="organizer" type="text" value="{{old('organizer',$eventmanagement->organizer)}}" required>
                            @error('organizer')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="authorized_person">Authorized Person: </label>
                            <input class="form-control" id="authorized_person" name="authorized_person" type="text" value="{{old('authorized_person',$eventmanagement->authorized_person)}}" required>
                            @error('authorized_person')
                            <span>{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone_no">phone No: </label>
                            <input class="form-control" id="phone_no" name="phone_no" type="text" value="{{old('phone_no',$eventmanagement->phone_no)}}">
                            @error('phone_no')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="remark">Remark: </label>
                            <input class="form-control" id="remark" name="remark" type="text" value="{{old('remark',$eventmanagement->remark)}}" required>
                            @error('remark')
                            <span>{{$message}}</span>
                            @enderror
                        <div class="box-footer">
                            <button class="btn btn-success"  type="submit" id="submit" >Submit</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
  @endsection