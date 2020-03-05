@extends('admin.layout.main')

@section('title')
Transection Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Transection</h3>
        <br>
        <table class="table table-hover ">
        
        <a href="{{route('transection.create')}}"><button type="button" class="btn btn-info">Create</button></a>
        <br>
        <br>
            <thead>
                <tr class="trnas-tr">
                    <th>Id</th>
                    <th>Total Price</th>
                    <th>Date Time</th>
                    <th>Customer Id</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transections as $tr)
                <tr class="trans-td">
                    <td>{{$tr->id}}</td>
                    <td>{{$tr->total_price}}</td>
                    <td>{{$tr->date_time}}</td>
                    <td>{{$tr->customer_id}}</td>
                    <td>
                        <a href="{{route('transection.edit',$tr->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('transection.show',$tr->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('transection.delete',$tr->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
    </div>


    @endsection
