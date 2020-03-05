@extends('admin.layout.main')

@section('title')
Customer Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Customer</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
            <!-- <a href="{{route('customer.edit',$customer->id)}}"><button type="button" class="btn btn-info">Edit</button></a> -->
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
            <p>Phone: {{$customer->phone}}</p>
            <br>
            <p>Email: {{$customer->email}}</p>
            <br>
            <p>Address: {{$customer->address}}</p>
            <br>
            <p>Login Id: {{$customer->login_id}}</p>
            <br>
            <h5 style="color:red">Are you sure want to delete?</h5>

            <form action="{{route('customer.destroy',$customer->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            
            </form>

            <br>
            <br>


        </div>
    </div>
</div>
@endsection
