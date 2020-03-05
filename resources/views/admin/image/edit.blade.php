@extends('admin.layout.main')

@section('title')
Image Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Image</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('image.delete',$image->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('image.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$image->id}}</h5>
            <br>
            <form action="{{route('image.update',$image->id)}}" method="post">
            @csrf
            @method('PUT')
            Product Id: <input type="text" name="product_id" value="{{$image->product_id}}">
            <br>
            <br>
            Image Path: <input type="text" name="img_path" value="{{$image->img_path}}">
            <br>
            <input type="submit" value="save" class="btn btn-success">
            </form>

            <br>
            <br>



        </div>
    </div>
</div>

@endsection
