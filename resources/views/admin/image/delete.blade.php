@extends('admin.layout.main')

@section('title')
Image Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Image</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
            <a href="{{route('image.edit',$image->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('image.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$image->id}}</p>
            <br>
            <p>Product Id: {{$image->product_id}}</p>
            <br>
            <p>Image Path: {{$image->img_path}}</p>
            <br>
            <h6 style="color:red">Are you sure want to delete?</h6>
            <form action="{{route('image.destroy',$image->id)}}" method="post">
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
