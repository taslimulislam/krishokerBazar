@extends('admin.layout.main')

@section('title')
Category Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Category</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
            <a href="{{route('category.edit',$category->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('category.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            
                <br>
                
                <td>
                    <img src="{{asset('')}}{{$category->img_path}}" alt="Image Alternative text"
                    title="{{$category->name}}" height="80px" width="100"/>
                </td>
                
            <br>
            <br>
            <p>Id:{{$category->id}}</p>
            
            <p>Name: {{$category->name}}</p>
            
            <h6 style="color:red">Are you sure want to delete?</h6>

            <form action="{{route('category.destroy',$category->id)}}" method="post">
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
