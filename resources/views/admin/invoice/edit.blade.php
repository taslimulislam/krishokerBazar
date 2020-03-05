@extends('admin.layout.main')

@section('title')
Invoice Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Invoice</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('invoice.delete',$invoice->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('invoice.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$invoice->id}}</h5>
            <br>
            <form action="{{route('invoice.update',$invoice->id)}}" method="post">
            @csrf
            @method('PUT')
            Product Id: <input type="number" name="product_id" value="{{$invoice->product_id}}">
            <br>
            <br>
            Unit Price Quantity: <input type="number" name="unit_price_quantity" value="{{$invoice->unit_price_quantity}}">
            <br>
            <br>
            Total Price: <input type="number" name="total_price" value="{{$invoice->total_price}}">
            <br>
            <br>
            Status: <input type="text" name="status" value="{{$invoice->status}}">
            <br>
            <br>
            Transection Id: <input type="number" name="transection_id" value="{{$invoice->transection_id}}">
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
