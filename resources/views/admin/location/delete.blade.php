@extends('admin.layout.main')

@section('title')
Location Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Location</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
            <a href="{{route('location.edit',$location->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('location.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$location->id}}</p>
            <br>
            <p>Customer Id: {{$location->customer_id}}</p>
            <br>
            <p>Seller Id:{{$location->seller_id}}</p>
            <br>
            <p>Location: {{$location->location}}</p>
            <br>
            <h6 style="color:red">Are you sure want to delete?</h6>
            <form action="{{route('location.destroy',$location->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            
            </form>


            <br>
            <br>


        </div>
    </div>
</div>
@endsection
