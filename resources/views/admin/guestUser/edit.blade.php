@extends('admin.layout.main')

@section('title')
Guest Edit
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container ">
        <h3>Guest</h3>
        <h4>Edit:</h4>
        <br>
        <div class="container">
            <a href="{{route('guest.delete',$guest->id)}}"><button type="button" class="btn btn-info">Delete</button></a>
            <a href="{{route('guestUser.index')}}"><button type="button" class="btn btn-info">Back to List</button></a>
            <br>
            <br>
            <h5>ID: {{$guest->id}}</h5>
            <br>
            <form action="{{route('guestUser.update',$guest->id)}}" method="post">
                @csrf
                @method('PUT')
                Name: <input type="text" name="name" value="{{$guest->name}}">
                <br>
                <br>
                Phone: <input type="text" name="phone" value="{{$guest->phone}}">
                <br>
                <br>
                Address: <input type="text" name="address" value="{{$guest->address}}">
                <br>
                <input type="submit" value="save" class="btn btn-success">
            </form>

            <br>
            <br>



        </div>
    </div>
</div>

@endsection
