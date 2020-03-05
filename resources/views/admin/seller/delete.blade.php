@extends('admin.layout.main')

@section('title')
Seller Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Seller</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
            <a href="{{route('seller.edit',$seller->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('seller.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$seller->id}}</p>
            <br>
            <p>Name: {{$seller->name}}</p>
            <br>
            <p>Phone: {{$seller->phone}}</p>
            <br>
            <p>Email: {{$seller->email}}</p>
            <br>
            <p>Address: {{$seller->address}}</p>
            <br>
            <p>Login Id: {{$seller->login_id}}</p>
            <br>
            <h6 style="color:red">Are you sure want to delete?</h6>
            
            <form action="{{route('seller.destroy',$seller->id)}}" method="post">
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
