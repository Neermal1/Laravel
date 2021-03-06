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
                        <th>Title</th>
                        <th>Description</th>
                        <th>Start_date</th>
                        <th>End_date</th>
                        <th>Start_time</th>
                        <th>End_time</th>
                        <th>Orginizer</th>
                        <th>Authorized_person</th>
                        <th>Phone_no</th>
                        <th>Remark</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>

                        @if($events)
                            @foreach($events as $key=>$item)
                                <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->start_date}}</td>
                                <td>{{$item->end_date}}</td>
                                <td>{{$item->start_time}}</td>
                                <td>{{$item->end_time}}</td>
                                <td>{{$item->organizer}}</td>
                                <td>{{$item->authorized_person}}</td>
                                <td>{{$item->phone_no}}</td>
                                <td>{{$item->remark}}</td>

                                    <td><a href="{{url('admin/events/'.$item->id.'/edit')}}" style="border-radius:50%" class="btn btn-success"><i class="fa fa-edit"></i></a></td>

                                    <td>   <form method="post" action="{{url('admin/events/'.$item->id)}}">
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
    </script>
@endsection
