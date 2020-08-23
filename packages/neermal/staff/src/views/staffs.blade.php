@extends('layouts.my_frame')
@section('title','List')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <table id="data_list" class="table table-bordered">
                        <thead>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>profile_image</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Department_name</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Joined_Date</th>
                        <th>Resigned_date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>

                        @if($staff)
                            @foreach($staff as $key=>$item)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    @if($item->profile)
                                    <img src="{{asset('storage/'.$item->profile)}}" width="150">
                                    @endif

                                </td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->department_name}}</td>
                                <td>{{$item->designation}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->joined_date}}</td>
                                <td>{{$item->resigned_date}}</td>
                            
                                    <td><a href="{{url('admin/staffs/'.$item->id.'/edit')}}" style="border-radius:50%" class="btn btn-success"><i class="fa fa-edit"></i></a></td>

                                    <td>   <form method="post" action="{{url('admin/staffs/'.$item->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button style="border-radius:50%" onclick="return confirm('Do you want to delete this?')" class="btn btn-danger"> <i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#data_list').DataTable( {
                "scrollX": true
            } );
        } );
        $('.staffs').addClass('active');
        $('.staffs_list').addClass('active');
    </script>
@endsection
