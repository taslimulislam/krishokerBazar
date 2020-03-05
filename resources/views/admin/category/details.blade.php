@extends('admin.layout.main')

@section('title')
Category Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Category</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
            <a href="{{route('category.edit',$category->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('admin.category.delete',$category->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('category.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br><br>
           
            <p>Id:{{$category->id}}</p>
            
            <p>Name: {{$category->name}}</p>
           
           <br>
            <img src="{{asset('')}}{{$category->img_path}}" alt="Image Alternative text"
                            title="{{$category->name}}" height="200px" />
                            <br>
                            <br>
        </div>
    </div>
</div>

@endsection
