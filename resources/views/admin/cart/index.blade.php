@extends('admin.layout.main')

@section('title')
Cart Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Cart</h3>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="cart-tr">
                    <th>Id</th>
                    <th>Customer Id</th>
                    <th>Product Id</th>
                    <th>Quantity</th>
                    <th>Date Time</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carts as $ca)
                <tr class="cart-td">
                    <td>{{$ca->id}}</td>
                    <td>{{$ca->customer_id}}</td>
                    <td>{{$ca->product_id}}</td>
                    <td>{{$ca->quantity}}</td>
                    <td>{{$ca->date_time}}</td>
                    <td>
                        <a href="{{route('cart.edit',$ca->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('cart.show',$ca->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('cart.delete',$ca->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <!-- <a href="{{route('cart.create')}}"><button type="button" class="btn btn-info">Create</button></a> -->
    </div>


    @endsection
