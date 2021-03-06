@extends('layouts.my_frame')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <h4 class="text-center">Update Project:</h4>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <form role="form" method="post" action="{{ url('admin/projects/'.$project->id)}}" class="form-group"  enctype="multipart/form-data" >
                    <div class="box-body">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input class="form-control" id="name" name="name" type="text" value="{{old('name',$project->name)}}" required>
                            @error('name')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Slug: </label>
                            <input class="form-control" id="slug" name="slug" type="text" value="{{old('slug',$project->slug)}}">
                            @error('slug')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Type: </label>
                            <select id="type" class="form-control" name="type">
                                @foreach(['Web Site','Web Application','Android App','IOS App'] as $item)
                                    <option value="{{$item}}" {{($project->type==$item)?'selected':''}}>{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="logo" class="col-sm-12 control-label">Logo: </label>
                            <input type="file" name="logo" id="logo" accept="image/* " class="col-sm-3 control-label">
                            <img src="{{($project->logo)?url('project_images/'.$project->logo):'#'}}" alt="your image" width="75"/>
                        </div>
                        @error('logo')
                        <span>{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="thumbnail" class="col-sm-12 control-label">Thumbnail: </label>
                            <input type="file" name="thumbnail" id="thumbnail" class="col-sm-3 control-label" accept="image/* ">
                            <img src="{{($project->thumbnail)?url('project_images/'.$project->thumbnail):'#'}}" alt="your image" width="75"/>
                        </div>
                        @error('thumbnail')
                        <span>{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="banner" class="col-sm-12 control-label">Banner: </label>
                            <input type="file" name="banner" id="banner" accept="image/* " class="col-sm-3 control-label">
                            <img src="{{($project->banner)?url('project_images/'.$project->banner):'#'}}" alt="your image" width="75"/>
                        </div>
                        @error('banner')
                        <span>{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="featured_image" class="col-sm-12 control-label">featured Image: </label>
                            <input type="file" name="featured_image" id="featured_image" accept="image/* " class="col-sm-3 control-label">
                            <img src="{{($project->featured_image)?url('project_images/'.$project->featured_image):'#'}}" alt="your image" width="75" />
                        </div>
                        @error('featured_image')
                        <span>{{$message}}</span>
                        @enderror
                        <div class="form-group ">
                            <label for="excerpt" class="col-3">Excerpt: </label>
                            <textarea class="form-control" id="excerpt" name="excerpt" required>{{old('excerpt',$project->excerpt)}}</textarea>
                        </div>
                        @error('excerpt')
                        <span>{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="detail">Detail: </label>
                            <textarea class="form-control" id="detail" name="detail" required>{{old('detail',$project->detail)}}</textarea>
                            @error('detail')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="web">web: </label>
                            <input type="url" class="form-control" id="web" name="web" value="{{old('web',$project->web)}}"/>
                            @error('web')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="platform">Platform: </label>
                            <select id="platform" class="form-control" name="platform">
                                @foreach(['Bow CMS','Laravel','Wordpress','PHP','Python','React','Other'] as $item)
                                    <option value="{{$item}}" {{$item==$project->platform?'selected':''}}>{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="designed">Designed: </label>
                            <input class="form-control" id="designed" name="designed" type="text" value="{{old('designed',$project->designed)}}">
                            @error('designed')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tools">Tools: </label>
                            <input class="form-control" id="tools" name="tools" type="text" value="{{old('tools',$project->tools)}}">
                            @error('tools')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">address: </label>
                            <input class="form-control" id="address" name="address" type="text" value="{{old('address',$project->address)}}">
                            @error('address')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">email: </label>
                            <input class="form-control" id="address" name="email" type="email" value="{{old('email',$project->email)}}">
                            @error('email')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">phone: </label>
                            <input class="form-control" id="phone" name="phone" type="text" value="{{old('phone',$project->phone)}}">
                            @error('phone')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mobile">mobile: </label>
                            <input class="form-control" id="mobile" name="mobile" type="text" value="{{old('mobile',$project->mobile)}}">
                            @error('mobile')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="work_progress">Work Progress: </label>
                            <select id="work_progress" class="form-control" name="work_progress">
                                @foreach(['Working','Pending','Completed'] as $item)
                                    <option value="{{$item}}" {{($item==$project->work_progress)?'selected':''}}>{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user_id">User : </label>
                            <select id="user_id" class="form-control" name="user_id">
                                <option value="">None</option>
                                @foreach($users as $item)
                                    <option value="{{$item->id}}" {{($item->id==$project->user_id)?'selected':''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status" >Status: </label>
                            <select name="status" id="status" class="form-control form-control-sm">
                                <option value="1" {{$project->status==1?'selected':''}}>Active</option>
                                <option value="0"{{$project->status==0?'selected':''}}>Inactive</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="other">Other: </label>
                            <input class="form-control" id="other" name="other" type="text" value="{{old('other',$project->other)}}">
                            @error('other')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-success"  type="submit" id="submit" >Submit</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            CKEDITOR.replace('excerpt');
            CKEDITOR.replace('detail');
            $(".projects").addClass('active');
            $(".projects_edit").addClass('active');
            $('.popup').click(function (event) {
                event.preventDefault();
                window.open('{{url('admin/select-image')}}', "popupWindow", "width=600,height=400,scrollbars=yes");
            });
            $(".select_group").select2();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(input).next().attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('input[type="file"]').change(function() {
            readURL(this);
        });
    </script>
@endsection
