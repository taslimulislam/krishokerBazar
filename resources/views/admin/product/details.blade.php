@extends('admin.layout.main')

@section('title')
Product Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Product</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
            <a href="{{route('product.edit',$product->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('product.delete',$product->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('product.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            Image:
            <br>
            <br>
            <td><img src="{{asset('')}}{{$product->img_path}}" alt="Image Alternative text"
                            title="{{$product->name}}" height="100px" width="100px"/></td>
            <td>
            <br>
            <br>
            <p>Id: {{$product->id}}</p>
            <br>
            <p>Seller Id: {{$product->seller_id}}</p>
            <br>
            <p>Status: {{$product->status}}</p>
            <br>
            <p>Name: {{$product->name}}</p>
            <br>
            <p>selling price: {{$product->selling_price}}</p>
            <br>
            <p>Buying Price: {{$product->buying_price}}</p>
            <br>
            <p>Quantity: {{$product->quantity}}</p>
            <br>
            <p>Description: {{$product->description}}</p>
            <br>
            <p>Location: {{$product->location}}</p>
            <br>
            <p>Subcategory Id: {{$product->subcategory_id}}</p>
            <br>
            
        </div>
    </div>
</div>

@endsection
