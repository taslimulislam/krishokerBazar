@extends('admin.layout.main')

@section('title')
Ratings Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Ratings</h3>
        <h4>Index:</h4>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="ratings-tr">
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>Customer Id</th>
                    <th>Date Time</th>
                    <th>Rate</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ratings as $ra)
                <tr class="ratings-td">
                    <td>{{$ra->id}}</td>
                    <td>{{$ra->product_id}}</td>
                    <td>{{$ra->customer_id}}</td>
                    <td>{{$ra->date_time}}</td>
                    <td>{{$ra->rate}}</td>
                    <td>
                        <a href="{{route('ratings.edit',$ra->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('ratings.show',$ra->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('ratings.delete',$ra->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <a href="{{route('ratings.create')}}"><button type="button" class="btn btn-info">Create</button></a>
    </div>


    @endsection
