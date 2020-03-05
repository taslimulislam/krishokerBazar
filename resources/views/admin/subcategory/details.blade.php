@extends('admin.layout.main')

@section('title')
SubCategory Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>SubCategory</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
        <a href="{{route('subcategory.edit',$subcategory->id)}}"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="{{route('subcategory.delete',$subcategory->id)}}"><button type="button" class="btn btn-info">Delete</button></a>
            <a href="{{route('subcategory.index')}}"><button type="button" class="btn btn-info">Back to List</button></a>
            <br>
            <br>
            Image:
            <br>
            <br>
            <img src="{{asset('')}}{{$subcategory->img_path}}" alt="Image Alternative text"
            title="{{$subcategory->name}}" height="100px" width="100px"/>
            <br>
            <br>
            <p>Id: {{$subcategory->id}}</p>
            <br>
            <p>Name: {{$subcategory->name}}</p>
            <br>
            <p>Description:{{$subcategory->description}}</p>
            <br>
            <p>Category Id: {{$subcategory->category_id}}</p>
            <br>
            
        </div>
    </div>
</div>

@endsection
