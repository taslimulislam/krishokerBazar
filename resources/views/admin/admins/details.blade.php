@extends('admin.layout.main')

@section('title')
Admin Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Admin</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
            <a href="{{route('admin.edit',$admin->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('admin.delete',$admin->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('admin.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            
            <br>
            <td>
                 <img src="{{asset('')}}{{$admin->img_path}}" alt="Image Alternative text"
                title="{{$admin->name}}" height="80px" width="100"/>
            </td><br> <br>
            
            <p>Id:{{$admin->id}}</p>
            
            <p>Join date:{{$admin->join_date}}</p>
           
            <p>Name: {{$admin->name}}</p>
            
            <p>Phone: {{$admin->phone}}</p>
            
            <p>Email: {{$admin->email}}</p>
            
            <p>Join Date: {{$admin->join_date}}</p>
            
            
        </div>
    </div>
</div>

@endsection
