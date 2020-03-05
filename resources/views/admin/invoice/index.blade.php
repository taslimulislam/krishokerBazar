@extends('admin.layout.main')

@section('title')
Invoice Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Invoice</h3>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="invoice-tr">
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>Unit Price Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Transection Id</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($invoices as $in)
                <tr class="invoice-td">
                    <td>{{$in->id}}</td>
                    <td>{{$in->product_id}}</td>
                    <td>{{$in->unit_price_quantity}}</td>
                    <td>{{$in->total_price}}</td>
                    <td>{{$in->status}}</td>
                    <td>{{$in->transection_id}}</td>
                    <td>
                        <a href="{{route('invoice.edit',$in->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('invoice.show',$in->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('invoice.delete',$in->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <a href="{{route('invoice.create')}}"><button type="button" class="btn btn-info">Create</button></a>
    </div>


    @endsection
