@extends('admin.layout.main')

@section('title')
Cart Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Cart</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('cart.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('cart.store')}}" method="post" >
                @csrf
                Customer Id: <input type="number" name="customer_id" >
                <br>
                <br>
                Product Id: <input type="number" name="product_id">
                <br>
                <br>
                Quantity: <input type="number" name="quantity">
                <br>
                <br>
                Date Time: <input type="number" name="date_time">
                <br>
                <br>
                Guest User Id: <input type="number" name="guest_user_id">
                <br>
                <br>
                <input type="submit" value="submit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
