@extends('admin.layout.main')

@section('title')
Login Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Login</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
        <a href="{{route('login.edit',$login->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('login.delete',$login->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('login.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$login->id}}</p>
            <br>
            <p>User Name: {{$login->userName}}</p>
            <br>
            <p>Password: {{$login->password}}</p>
            <br>
            <p>Type: {{$login->type}}</p>
            <br>
        </div>
    </div>
</div>

@endsection
