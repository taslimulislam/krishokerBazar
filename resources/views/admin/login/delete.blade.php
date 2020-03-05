@extends('admin.layout.main')

@section('title')
Login Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Login</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
        <a href="{{route('login.edit',$login->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('login.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$login->id}}</p>
            
            <p>User Name: {{$login->userName}}</p>
            
            <p>Password: {{$login->password}}</p>
            
            <p>Type: {{$login->type}}</p>
            <br>
            <h6 style="color:red">Are you sure want to delete?</h6>
            <form action="{{route('login.destroy',$login->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">

            <br>
            <br>


        </div>
    </div>
</div>
@endsection
