@extends('admin.layout.main')

@section('title')
Cart Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Cart</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
            <a href="{{route('cart.edit',$cart->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('cart.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id:{{$cart->id}}</p>
            <br>
            <p>Customer Id: {{$cart->customer_id}}</p>
            <br>
            <p>Product Id: {{$cart->product_id}}</p>
            <br>
            <p>Quantity: {{$cart->quantity}}</p>
            <br>
            <p>Date Time: {{$cart->date_time}}</p>
            <br>
            <h6 style="color:red">Are you sure want to delete?</h6>

            <form action="{{route('cart.destroy',$cart->id)}}" method="post">
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
