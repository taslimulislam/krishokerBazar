@extends('admin.layout.main')

@section('title')
Product Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Product</h3>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="product-tr">
                    <th>Id</th>
                    <th>Seller Id</th>
                    <th>Status</th>
                    <th>Name</th>
                    <th>selling price</th>
                    <th>Buying Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>location</th>
                    <th>Subcategory Id</th>
                    <th>Image</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $pr)
                <tr class="product-td">
                    <td>{{$pr->id}}</td>
                    <td>{{$pr->seller_id}}</td>
                    <td>{{$pr->status}}</td>
                    <td>{{$pr->name}}</td>
                    <td>{{$pr->selling_price}}</td>
                    <td>{{$pr->buying_price}}</td>
                    <td>{{$pr->quantity}}</td>
                    <td>{{$pr->description}}</td>
                    <td>{{$pr->location}}</td>
                    <td>{{$pr->subcategory_id}}</td>
                    <td><img src="{{asset('')}}{{$pr->img_path}}" alt="Image Alternative text"
                            title="{{$pr->name}}" height="100px" width="100px"/></td>
                    <td>
                    <a href="{{route('product.edit',$pr->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('product.show',$pr->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('product.delete',$pr->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <!-- <a href="{{route('product.create')}}"><button type="button" class="btn btn-info">Create</button></a> -->
    </div>


    @endsection
