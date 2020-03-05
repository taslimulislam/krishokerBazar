@extends('admin.layout.main')

@section('title')
Customer Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Customer</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
            <!-- <a href="{{route('customer.edit',$customer->id)}}"><button type="button" class="btn btn-info">Edit</button></a> -->
            <a href="{{route('customer.delete',$customer->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="{{route('customer.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            Image:
            <br>
            <br>
            <img src="{{asset('')}}{{$customer->img_path}}" alt="Image Alternative text"
                            title="{{$customer->name}}" height="200px" />
            <br>
            <br>
            <p>Id: {{$customer->id}}</p>
            <br>
            <p>Name: {{$customer->name}}</p>
            <br>
            <p>Email: {{$customer->email}}</p>
            <br>
            <p>Address: {{$customer->address}}</p>
            <br>
            <p>Phone: {{$customer->phone}}</p>
            <br>
            
            
            <p>Login Id: {{$customer->login_id}}</p>
            <br>
            

        </div>
    </div>
</div>

@endsection
