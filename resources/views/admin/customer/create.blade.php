@extends('admin.layout.main')

@section('title')
Customer Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Customer</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('customer.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('customer.store')}}" method="post">
                @csrf

                Name: <input type="text" name="name">
                <br>
                <br>
                Phone: <input type="text" name="phone">
                <br>
                <br>
                Email: <input type="text" name="email">
                <br>
                <br>
                Address: <input type="text" name="address">
                <br>
                <br>
                Login Id: <input type="number" name="login_id">
                <br>
                <br>
                <input type="submit" value="submit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
