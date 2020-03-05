@extends('admin.layout.main')

@section('title')
Transection Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Transection</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
            <a href="{{route('transection.edit',$transection->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('transection.delete',$transection->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('transection.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$transection->id}}</p>
            <br>
            <p>Total Price: {{$transection->total_price}}</p>
            <br>
            <p>Date Time: {{$transection->date_time}}</p>
            <br>
            <p>Customer Id: {{$transection->customer_id}}</p>
            <br>
        </div>
    </div>
</div>

@endsection
