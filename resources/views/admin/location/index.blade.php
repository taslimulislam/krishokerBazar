@extends('admin.layout.main')

@section('title')
Location Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Location</h3>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="loc-tr">
                    <th> Id</th>
                    <th>Customer Id</th>
                    <th>Seller Id</th>
                    <th>Location</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($locations as $lo)
                <tr class="loc-td">
                    <td>{{$lo->id}}</td>
                    <td>{{$lo->customer_id}}</td>
                    <td>{{$lo->seller_id}}</td>
                    <td>{{$lo->location}}</td>
                    <td>
                        <a href="{{route('location.edit',$lo->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('location.show',$lo->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('location.delete',$lo->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <a href="{{route('location.create')}}"><button type="button" class="btn btn-info">Create</button></a>
    </div>


    @endsection
