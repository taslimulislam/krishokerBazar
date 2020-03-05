@extends('admin.layout.main')

@section('title')
Cart Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Cart</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('cart.delete',$cart->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('cart.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$cart->id}}</h5>
            <br>
            <form action="{{route('cart.update',$cart->id)}}" method="post">

                @csrf
                @method('PUT')
                customer Id: {{$cart->customer_id}}
                <br>
                <br>
                Product Id: <input type="number" name="product_id" value="{{$cart->product_id}}">
                <br>
                <br>
                Quantity: <input type="number" name="quantity" value="{{$cart->quantity}}">
                <br>
                <br>
                Date Time: <input type="text" name="date_time" value="{{$cart->date_time}}">
                <br>
                <br>
                
                <input type="submit" value="save" class="btn btn-success">
                <br>
                <br>
                @if($errors->any())
                <h4 style="color:red">Errors</h4>
                <ul style="color:red">
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
                </ul>
                @endif
            </form>



        </div>
    </div>
</div>

@endsection
