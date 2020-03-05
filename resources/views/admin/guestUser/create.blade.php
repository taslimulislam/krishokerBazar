@extends('admin.layout.main')

@section('title')
Guest Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Guest</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('guestUser.index')}}"><button type="button" class="btn btn-info">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('guestUser.store')}}" method="post">
                @csrf
                Name: <input type="text" name="name">
                <br>
                <br>
                Phone: <input type="text" name="phone">
                <br>
                <br>
                Address: <input type="text" name="address">
                <br>
                <br>
                <input type="submit" value="submit" class="btn btn-success">
            </form>

        </div>
    </div>
</div>
@endsection
