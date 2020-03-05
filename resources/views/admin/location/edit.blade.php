@extends('admin.layout.main')

@section('title')
Location Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Location</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('location.delete',$location->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('location.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>

            <h5>ID: {{$location->id}}</h5>
            <br>
            <form action="{{route('location.update',$location->id)}}" method="post">
            @csrf
            @method('PUT')
            Customer Id: <input type="number" name="customer_id" value="{{$location->customer_id}}">
            <br>
            <br>
            Seller Id: <input type="number" name="seller_id" value="{{$location->seller_id}}">
            <br>
            <br>
            Location: <input type="text" name="location" value="{{$location->location}}">
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
