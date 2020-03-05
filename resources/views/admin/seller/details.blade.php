@extends('admin.layout.main')

@section('title')
Seller Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Seller</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
            <a href="{{route('seller.edit',$seller->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('seller.delete',$seller->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('seller.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$seller->id}}</p>
            <br>
            <p>Name: {{$seller->name}}</p>
            <br>
            <p>Phone: {{$seller->phone}}</p>
            <br>
            <p>Email: {{$seller->email}}</p>
            <br>
            <p>Address: {{$seller->address}}</p>
            <br>
            <p>Login Id: {{$seller->login_id}}</p>
            <br>
            

        </div>
    </div>
</div>

@endsection
