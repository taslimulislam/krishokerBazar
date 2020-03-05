@extends('admin.layout.main')

@section('title')
Ratings Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Ratings</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('ratings.delete',$ratings->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('ratings.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$ratings->id}}</h5>
            <br>
            <br>
            <form action="{{route('ratings.update',$ratings->id)}}" method="post">
            @csrf
            @method('PUT')
            Product Id: <input type="number" name="product_id" value="{{$ratings->product_id}}">
            <br>
            <br>
            Customer Id: <input type="number" name="customer_id" value="{{$ratings->customer_id}}">
            <br>
            <br>
            Date Time: <input type="text" name="date_time" value="{{$ratings->date_time}}">
            <br>
            <br>
            Rate: <input type="number" name="rate" value="{{$ratings->rate}}"> 
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
