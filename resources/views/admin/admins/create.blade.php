@extends('admin.layout.main')

@section('title')
Admin Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Admin</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('admin.index')}}"><button type="button" class="btn btn-info">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('admin.store')}}" method="post">
                @csrf
                
                Name: <input type="text" name="name">
                <br>
                <br>
                User Name: <input type="text" name="username">
                <br>
                <br>
                Password: <input type="text" name="password">
                <br>
                <br>
                Email: <input type="text" name="email">
                <br>
                <br>
                Join Date: <input type="text" name="join_date">
                <br>
                <br>
                Login Id: <input type="number" name="login_id">
                <br>
                <br>
                
                <input type="submit" value="submit" class="btn btn-success">
                
            </form>

        </div>
    </div>
</div>
@endsection
