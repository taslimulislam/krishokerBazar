@extends('admin.layout.main')

@section('title')
Seller Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Seller</h3>
        <br>
        <table class="table table-hover ">

        

            <thead>
                <tr class="seller-tr">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Login Id</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($sellers as $se)
                <tr class="seller-td">
                    <td>{{$se->id}}</td>
                    <td>{{$se->name}}</td>
                    <td>{{$se->email}}</td>
                    <td>{{$se->address}}</td>
                    <td>{{$se->phone}}</td>
                    <td>{{$se->ilogin_id}}</td>
                    <td>
                        <a href="{{route('seller.edit',$se->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="{{route('seller.show',$se->id)}}"><button type="button" class="btn btn-primary">Details</button></a>
                        <a href="{{route('seller.delete',$se->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <!-- <a href="{{route('seller.create')}}"><button type="button" class="btn btn-info">Create</button></a> -->
    </div>


    @endsection
