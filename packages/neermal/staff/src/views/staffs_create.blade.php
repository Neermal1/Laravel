@extends('layouts.my_frame')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <h4 class="text-center">Create Staff:</h4>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <form role="form" method="post" action="{{ url('admin/staffs')}}" class="form-group"  enctype="multipart/form-data" >
                    <div class="box-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input class="form-control" id="name" name="name" type="text" value="{{old('name')}}" required>
                            @error('name')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                            <label for="profile" class="col-sm-12 control-label">Profile Image: </label>
                            <input type="file" name="profile" id="profile" accept="image/* " class="col-sm-3 control-label"><br>
                            @error('profile')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description: </label>
                            <textarea class="form-control" id="description" name="description" required>{{old('description')}}</textarea>
                            @error('description')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">address: </label>
                            <input class="form-control" id="address" name="address" type="text" value="{{old('address')}}">
                            @error('address')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">email: </label>
                            <input class="form-control" id="address" name="email" type="email" value="{{old('email')}}">
                            @error('email')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone_no">Phone No: </label>
                            <input class="form-control" id="phone_no" name="phone_no" type="text" value="{{old('phone_no')}}">
                            @error('phone_no')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="department">
                            <label for="department_name">Department Name: </label>
                            <input class="form-control" id="department_name" name="department_name" type="text" value="{{old('department_name')}}">
                            @error('department_name')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label for="designation">Designation: </label>
                            <input class="form-control" id="designation" name="designation" type="text" value="{{old('designation')}}">
                            @error('designation')
                            <span>{{$message}}</span>
                            @enderror
                        </div>   
                           <div class="form-group">
                            <label for="joined_date">Joined Date: </label>
                            <input class="form-control" id="joined_date" name="joined_date" type="Date" value="{{old('joined_date')}}">
                            @error('joined_date')
                            <span>{{$message}}</span>
                            @enderror
                        </div>   
                            <div class="form-group">
                            <label for="resigned_date">Resigned Date: </label>
                            <input class="form-control" id="resigned_date" name="resigned_date" type="Date" value="{{old('resigned_date')}}">
                        </div>                                                                                   
                        <div class="form-group">
                            <label for="status" >Status: </label>
                            <select name="status" id="status" class="form-control form-control-sm">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                    </div>

                        <div class="box-footer">
                            <button class="btn btn-success"  type="submit" id="submit" >Submit</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   <script>
        $(function () {
            $(".staffs").addClass('active');
            $(".staffs_create").addClass('active');
        });
    </script>
@endsection
