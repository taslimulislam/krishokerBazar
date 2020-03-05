@extends('admin.layout.main')

@section('title')
Product Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Product</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('product.delete',$product->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('product.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$product->id}}</h5>
            <br>
            Seller id: {{$product->seller_id}}
            <br>
            <br>
            <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            Iamge:
                <br>
                <br>
                <td>
                    <img src="{{asset('')}}{{$product->img_path}}" alt="Image Alternative text"
                    title="{{$product->name}}" height="80px" width="100"/>
                </td>
                <br>
                <br>
                Change Image : <input type="file" name="pic" >
                <br>
                <br>
            Status: <input type="text" name="status" value="{{$product->status}}">
            <br>
            <br>
            Name: <input type="text" name="name" value="{{$product->name}}"> 
            <br>
            <br>
            Selling Prce: <input type="text" name="selling_price" value="{{$product->selling_price}}"> 
            <br>
            <br>
            Buying Price: <input type="number" name="buying_price" value="{{$product->buying_price}}"> 
            <br>
            <br>
            Quantity: <input type="number" name="quantity" value="{{$product->quantity}}">
            <br>
            <br>
            Description: <input type="text" name="description" value="{{$product->description}}">
            <br>
            <br>
            Location: <input type="text" name="location" value="{{$product->location}}">
            <br>
            <br>
            Subcategory Id: <input type="number" name="subcategory_id" value="{{$product->subcategory_id}}">
            <br>
            <br>
            
            <input type="submit" value="save" class="btn btn-success">

            @if($errors->any())
                <h4 style="color:red">Errors</h4>
                <ul style="color:red">
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
                </ul>
                @endif
            </form>
            <br>
            <br>
        </div>
    </div>
</div>

@endsection
