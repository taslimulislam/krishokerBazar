@extends('admin.layout.main')

@section('title')
SubCategory Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>SubCategory</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('subcategory.delete',$subcategory->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('subcategory.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            Image:
            <br>
            <br>
            <img src="{{asset('')}}{{$subcategory->img_path}}" alt="Image Alternative text"
            title="{{$subcategory->name}}" height="100px" width="100px"/>
            <br>
            
            <h5>ID: {{$subcategory->id}}</h5>
            
            <br>
            <form action="{{route('subcategory.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            Change Image : <input type="file" name="pic" >
                <br>
                
            Name: <input type="text" name="name" value="{{$subcategory->name}}">
            <br>
            
            Description: <input type="text" name="description" value="{{$subcategory->description}}" width="300px">
            <br>
            
            Category Id: <input type="text" name="category_id" value="{{$subcategory->category_id}}">
            <br>
            
            <input type="submit" value="save" class="btn btn-success">
            </form>
            <br>
        </div>
    </div>
</div>

@endsection
