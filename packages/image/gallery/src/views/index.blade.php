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
                        <th>Album</th>
                        <th>Photos</th>
                        </thead>
                        <tbody>

                        @if($albums)
                            @foreach ($albums as $album)
                                <tr>
                                <td>{{$album->title}}</td>
                                    <td>
                                        @foreach ($album->photos as $photo)
                                            @if ($loop->iteration > 1)
                                                <br />
                                            @endif
                                            {{ $photo->filename }}
                                        @endforeach
                                    </td>
                                </tr>
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
