@extends('admin.layout.main')

@section('title')
Customer Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Customer</h3>
        <h4>Index:</h4>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr class="customer-tr">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>image path</th>
                    <th>Login Id</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            @foreach($customers as $cu)
                <tr class="customer-td">
                    <td>{{$cu->id}}</td>
                    <td>{{$cu->name}}</td>
                    <td>{{$cu->email}}</td>
                    <td>{{$cu->address}}</td>
                    <td>{{$cu->phone}}</td>
                    <td>
                        <img src="{{asset('')}}{{$cu->img_path}}" alt="Image Alternative text"
                        title="{{$cu->name}}" height="80px" width="100"/>
                    </td>
                    <td>{{$cu->login_id}}</td>
                    <td>
                        <!-- <a href="{{route('customer.edit',$cu->id)}}"><button type="button" class="btn btn-info">Edit</button></a> -->
                        <a href="{{route('customer.show',$cu->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('customer.delete',$cu->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
            @endforeach    
                
            </tbody>
        </table>
        <!-- <a href="{{route('customer.create')}}"><button type="button" class="btn btn-info">Create</button></a> -->
    </div>


    @endsection
