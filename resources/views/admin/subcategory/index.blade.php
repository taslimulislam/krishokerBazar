@extends('admin.layout.main')

@section('title')
SubCategory Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Subcategory</h3>
        <br>
        <table class="table table-hover ">
        
        <a href="{{route('subcategory.create')}}"><button type="button" class="btn btn-info">Create</button></a>
        <br>
        <br>
            <thead>
                <tr class="sub-tr">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category Id</th>
                    <th>Image</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($subcategorys as $su)
                <tr class="sub-td">
                    <td>{{$su->id}}</td>
                    <td>{{$su->name}}</td>
                    <td>{{$su->description}}</td>
                    <td>{{$su->category_id}}</td>
                    <td>
                        <img src="{{asset('')}}{{$su->img_path}}" alt="Image Alternative text"
                        title="{{$su->name}}" height="80px" width="100"/>
                    </td>
                    <td>
                        <a href="{{route('subcategory.edit',$su->id)}}"><button type="button" class="btn btn-warning">Edit</button></a><br>
                        <a href="{{route('subcategory.show',$su->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('subcategory.delete',$su->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
       
    </div>


    @endsection
