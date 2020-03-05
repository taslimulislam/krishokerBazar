@extends('admin.layout.main')

@section('title')
Login Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Login</h3>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="login-tr">
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Passsword</th>
                    <th>Type</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($logins as $lo)
                <tr class="login-td">
                    <td>{{$lo->id}}</td>
                    <td>{{$lo->userName}}</td>
                    <td>{{$lo->password}}</td>
                    <td>{{$lo->type}}</td>
                    <td>
                    <a href="{{route('login.edit',$lo->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                    <a href="{{route('login.show',$lo->id)}}"><button type="button" class="btn btn-info">Details</button></a>
                    <a href="{{route('login.delete',$lo->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <!-- <a href="{{route('login.create')}}"><button type="button" class="btn btn-info">Create</button></a> -->
    </div>


    @endsection
