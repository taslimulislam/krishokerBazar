@extends('admin.layout.main')

@section('title')
Transection Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Transection</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
        <a href="{{route('transection.delete',$transection->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('transection.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>Id: {{$transection->id}}</h5>
            <br>
            <br>
            <form action="{{route('transection.update',$transection->id)}}" method="post">
            @csrf
            @method('PUT')
            Total Price: <input type="number" name="total_price" value="{{$transection->total_price}}">
            <br>
            <br>
            Date Time: <input type="text" name="date_time" value="{{$transection->date_time}}">
            <br>
            <br>
            Customer Id: <input type="text" name="customer_id" value="{{$transection->customer_id}}">
            <br>
            <input type="submit" value="save" class="btn btn-success">
            </form>
            <br>
            <br>
        </div>
    </div>
</div>

@endsection
