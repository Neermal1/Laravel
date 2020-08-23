@extends('layouts.my_frame')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <h4 class="text-center">Update Staff:</h4>
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
                            <label for="name" class="text-center">Name: </label>
                            <input class="form-control" id="name" name="name" type="text" value="{{old('name',$staff->name)}}" required>
                            @error('name')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                            <label for="profile" class="col-sm-12 control-label">Profile Image: </label>
                            <input type="file" name="profile" id="profile" accept="image/* " class="col-sm-3 control-label">

                            @error('profile')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description: </label>
                            <textarea class="form-control" id="description" name="description" required>{{old('description',$staff->description)}}</textarea>
                            @error('description')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">address: </label>
                            <input class="form-control" id="address" name="address" type="text" value="{{old('address',$staff->address)}}">
                            @error('address')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">email: </label>
                            <input class="form-control" id="address" name="email" type="email" value="{{old('email',$staff->email)}}">
                            @error('email')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">phone: </label>
                            <input class="form-control" id="phone" name="phone" type="text" value="{{old('phone',$staff->phone)}}">
                            @error('phone')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="department">
                            <label for="department_name">Department Name: </label>
                            <input class="form-control" id="department_name" name="department_name" type="text" value="{{old('department_name',$staff->department_name)}}">
                            @error('department_name')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label for="designation">Designation: </label>
                            <input class="form-control" id="designation" name="designation" type="text" value="{{old('designation',$staff->designation)}}">
                            @error('designation')
                            <span>{{$message}}</span>
                            @enderror
                        </div>   
                           <div class="form-group">
                            <label for="joined_date">Joined Date: </label>
                            <input class="form-control" id="joined_date" name="joined_date" type="Date" value="{{old('joined_date',$staff->joined_date)}}">
                            @error('joined_date')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="resigned_date">Resigned Date: </label>
                            <input class="form-control" id="resigned_date" name="resigned_date" type="Date" value="{{old('resigned_date',$staff->resigned_date)}}">
                            @error('resigned_date')
                            <span>{{$message}}</span>
                            @enderror
                        </div>                                                 
                        <div class="form-group">
                            <label for="status" >Status: </label>
                            <select name="status" id="status" class="form-control form-control-sm">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>

                        <div class="box-footer">
                            <button class="btn btn-success"  type="submit" id="submit" >Update</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    @endsection
