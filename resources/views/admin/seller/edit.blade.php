@extends('admin.layout.main')

@section('title')
Seller Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Seller</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('seller.delete',$seller->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('seller.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$seller->id}}</h5>
            <br>
            <h6>Login Id: {{$seller->login_id}}</h6>
            <br>
            <form action="{{route('seller.update',$seller->id)}}" method="post">
            @csrf
            @method('PUT')
            Name: <input type="text" name="name" value="{{$seller->name}}">
            <br>
            <br>
            Email: <input type="text" name="email" value="{{$seller->email}}">
            <br>
            <br>
            Address: <input type="text" name="address" value="{{$seller->address}}">
            <br>
            <br>
            Phone: <input type="text" name="phone" value="{{$seller->phone}}">
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
