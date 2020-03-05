@extends('admin.layout.main')

@section('title')
Image Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Image</h3>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="img-tr">
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>Image Path</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($images as $im)
            
                <tr class="img-td">
                    <td>{{$im->id}}</td>
                    <td>{{$im->product_id}}</td>
                    <td>{{$im->img_path}}</td>
                    <td>
                        <a href="{{route('image.edit',$im->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('image.show',$im->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('image.delete',$im->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <a href="{{route('image.create')}}"><button type="button" class="btn btn-info">Create</button></a>
    </div>


    @endsection
