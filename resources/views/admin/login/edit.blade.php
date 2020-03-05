@extends('admin.layout.main')

@section('title')
Login Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Login</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
        <a href="{{route('login.delete',$login->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('login.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$login->id}}</h5>
            <br>
            <form action="{{route('login.update',$login->id)}}" method="post">
            @csrf
            @method('PUT')
            
            User Name: <input type="text" name="userName" value="{{$login->userName}}">
            <br>
            <br>
            Password: <input type="text" name="password" value="{{$login->password}}">
            <br>
            <br>
            Type: <input type="text" name="type" value="{{$login->type}}">
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
