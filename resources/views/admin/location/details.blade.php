@extends('admin.layout.main')

@section('title')
Customer Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Customer</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
            <a href="{{route('location.edit',$location->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('location.delete',$location->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('location.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$location->id}}</p>
            <br>
            <p>Customer Id: {{$location->customer_id}}</p>
            <br>
            <p>Seller Id: {{$location->seller_id}}</p>
            <br>
            <p>Location: {{$location->location}}</p>
            <br>
            

        </div>
    </div>
</div>

@endsection
