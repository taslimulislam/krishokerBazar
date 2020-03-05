@extends('admin.layout.main')

@section('title')
Admin Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Admin</h3>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="admin-tr">
                    <th>Id</th>
                    <th>Login Id</th>
                    <th>Name</th>
                    <th>phone</th>
                    <th>Email</th>
                    <th>Join Date</th>
                    <th>Image</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($admins as $ad)
                <tr class="admin-td">
                    <td>{{$ad->id}}</td>
                    <td>{{$ad->login_id}}</td>
                    <td>{{$ad->name}}</td>
                    <td>{{$ad->phone}}</td>
                    <td>{{$ad->email}}</td>
                    <td>{{$ad->join_date}}</td>
                    <td>
                        <img src="{{asset('')}}{{$ad->img_path}}" alt="Image Alternative text"
                        title="{{$ad->name}}" height="80px" width="100"/>
                    </td>
                    <td>
                        <a href="{{route('admin.edit',$ad->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('admin.show',$ad->id)}}"><button type="button" class="btn btn-info">Details</button></a>
                        <a href="{{route('admin.delete',$ad->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <!-- <a href="{{route('admin.create')}}"><button type="button" class="btn btn-info">Create</button></a> -->
    </div>


    @endsection
