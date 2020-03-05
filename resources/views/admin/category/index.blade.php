@extends('admin.layout.main')

@section('title')
Category Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Category</h3>
        <br>
        <table class="table table-hover ">
        
        <a href="{{route('category.create')}}"><button type="button" class="btn btn-info">Create</button></a>
        <br>
        <br>
            <thead>
                <tr class="category-tr">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categorys as $cat)
                <tr class="category-td">
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->name}}</td>
                    <td>
                        <img src="{{asset('')}}{{$cat->img_path}}" alt="Image Alternative text"
                        title="{{$cat->name}}" height="80px" width="100"/>
                    </td>
                    <td>
                        <a href="{{route('category.edit',$cat->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('category.show',$cat->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('admin.category.delete',$cat->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
    </div>


    @endsection
