@extends('admin.layout.main')

@section('title')
Invoice Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Invoice</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
            <a href="{{route('invoice.edit',$invoice->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('invoice.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$invoice->id}}</p>
            <br>
            <p>Product Id: {{$invoice->product_id}}</p>
            <br>
            <p>Unit Price Quantity: {{$invoice->unit_price_quantity}}</p>
            <br>
            <p>Total Price: {{$invoice->total_price}}</p>
            <br>
            <p>Status: {{$invoice->status}}</p>
            <br>
            <p>Tranasection Id: {{$invoice->transection_id}}</p>
            <br>
            <h5 style="color:red">Are you sure want to delete?</h5>
            <form action="{{route('invoice.destroy',$invoice->id)}}" method="post">
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
