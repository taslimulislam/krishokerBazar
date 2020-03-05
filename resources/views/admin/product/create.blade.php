@extends('admin.layout.main')

@section('title')
Product Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Product</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('product.index')}}"><button type="button" class="btn btn-info">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('product.store')}}" method="post">
            @csrf
            Name: <input type="text" name="name" value="{{$admin->phone}}">
            <br>
            <br>
            Status: <input type="text" name="status" value="{{$admin->phone}}">
            <br>
            <br>
            Buying Price: <input type="number" name="buying_price" value="{{$admin->phone}}">
            <br>
            <br>
            
            Quantity: <input type="number" name="quantity" value="{{$admin->phone}}"> 
            <br>
            <br>
            Description: <input type="text" name="description" value="{{$admin->phone}}">
            <br>
            <br>
            Subcategory Id: <input type="number" name="subcategory_id" value="{{$admin->phone}}">
            <br>
            <br>
            <input type="submit" value="submit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
