@extends('admin.layout.main')

@section('title')
Login Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Login</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('login.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('login.store')}}" method="post">
                @csrf
            Type: <input type="text" name="type">
            <br>
            <br>
            User Name: <input type="text" name="username">
            <br>
            <br>
            Password: <input type="number" name="password">
            <br>
            <br>
            Status: <input type="text" name="status">
            <br>
            <br>
            <input type="submit" value="submit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
