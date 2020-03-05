@extends('admin.layout.main')

@section('title')
Category Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Category</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container-fluid">
            <a href="{{route('admin.category.delete',$category->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('category.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$category->id}}</h5>
            <br>
            <form action="{{route('category.update',$category->id)}} " method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                Iamge:
                <br>
                <br>
                <td>
                    <img src="{{asset('')}}{{$category->img_path}}" alt="Image Alternative text"
                    title="{{$category->name}}" height="80px" width="100"/>
                </td>
                <br>
                <br>
                Change Image : <input type="file" name="pic" >
                <br>
                <br>
                Name: <input type="text" name="name" value="{{$category->name}}">
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
