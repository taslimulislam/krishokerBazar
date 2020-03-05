@extends('admin.layout.main')

@section('title')
Customer Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Customer</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('customer.delete',$customer->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('customer.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$customer->id}}</h5>
            <br>
            <h6>Login Id: {{$customer->login_id}}</h6>
            <br>
            <form action="{{route('customer.update',$customer->id)}}" method="post">
            @csrf
            @method('PUT')

            Name: <input type="text" name="name" value="{{$customer->name}}">
            <br>
            <br>
            Phone: <input type="text" name="phone" value="{{$customer->phone}}" >
            <br>
            <br>
            Email: <input type="text" name="email" value="{{$customer->email}}">
            <br>
            <br>
            Address: <input type="text" name="address" value="{{$customer->address}}">
            <br>
            <br>
            Image path: <input type="text" name="img_path" value="{{$customer->img_path}}">
            <br>
            <br>
            
            <br>
            <input type="submit" value="save" class="btn btn-success">
            </form>
            <br>
            <br>



        </div>
    </div>
</div>

@endsection
