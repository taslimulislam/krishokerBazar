@extends('admin.layout.main')

@section('title')
SubCategory Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>SubCategory</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
        <a href="{{route('subcategory.edit',$subcategory->id)}}"><button type="button" class="btn btn-info">Edit</button></a>
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
            <p>Description: {{$subcategory->description}}</p>
            <br>
            <p>Category Id: {{$subcategory->category_id}}</p>
            <br>
            
            <h5 style="color:red">Are you sure want to delete?</h5>

            <form action="{{route('subcategory.destroy',$subcategory->id)}}" method="post">
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
