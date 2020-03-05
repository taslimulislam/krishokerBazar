@extends('admin.layout.main')

@section('title')
Admin Edit
@endsection

@section('content')
<div class="content-wrapper admin-edit">
    <div class="container ">
        <h3>Admin</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('admin.delete',$admin->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('admin.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$admin->id}}</h5>
            <br>
            <form action="{{route('admin.update',$admin->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                Iamge:
                <br>
                <br>
                <td>
                    <img src="{{asset('')}}{{$admin->img_path}}" alt="Image Alternative text"
                    title="{{$admin->name}}" height="80px" width="100"/>
                </td>
                Change Image : <input type="file" name="pic" >
                <br>
                <br>
                <h5>Id: {{$admin->id}}</h5>
                <br>
                <h5>Login Id: {{$admin->login_id}}</h5>
                <br>
                Name: {{$admin->name}}
                <br>
                <br>
                Phone: <input type="text" name="phone" value="{{$admin->phone}}">
                <br>
                <br>
                Email: <input type="text" name="email" value="{{$admin->email}}">
                <br>
                <br>
                
                Join Date: {{$admin->join_date}}
                <br>
                <br>
                
                <br>
                <input type="submit" value="save" class="btn btn-success">

                @if($errors->any())
                <h4 style="color:red">Errors</h4>
                <ul style="color:red">
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
                </ul>
                @endif
            </form>

            <br>
            <br>



        </div>
    </div>
</div>

@endsection
