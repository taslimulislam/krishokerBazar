@extends('admin.layout.main')

@section('title')
Guest Details
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container">
        <h3>Guest</h3>
        <h4>details:</h4>
        <br>
        <div class="container">
            <a href="{{route('guestUser.edit',$guest->id)}}"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="{{route('guest.delete',$guest->id)}}"><button type="button" class="btn btn-info">Delete</button></a>
            <a href="{{route('guestUser.index')}}"><button type="button" class="btn btn-info">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$guest->id}}</p>
            <br>
            <p>Name: {{$guest->name}}</p>
            <br>
            <p>Phone: {{$guest->phone}}</p>
            <br>
            <p>Address: {{$guest->address}}</p>
            <br>
        </div>
    </div>
</div>

@endsection
