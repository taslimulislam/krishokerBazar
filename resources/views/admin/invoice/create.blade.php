@extends('admin.layout.main')

@section('title')
Invoice Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Invoice</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('invoice.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('invoice.store')}}" method="post">
                @csrf
                Product Id: <input type="number" name="product_id">
                <br>
                <br>
                Unit Price Quantity: <input type="number" name="unit_price_quantity">
                <br>
                <br>
                Total Price: <input type="number" name="total_price">
                <br>
                <br>
                Status: <input type="text" name="status">
                <br>
                <br>
                Transection Id: <input type="number" name="transection_id">
                <br>
                <br>
                <input type="submit" value="submit" class="btn btn-success">
            </form>

        </div>
    </div>
</div>
@endsection
