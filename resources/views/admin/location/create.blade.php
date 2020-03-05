@extends('admin.layout.main')

@section('title')
Location Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Location</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('location.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            
            <br>
            <br>
            <form action="{{route('location.store')}}" method="post">
                @csrf
                Customer Id: <input type="number" name="customer_id">
                <br>
                <br>
                Seller Id: <input type="number" name="seller_id">
                <br>
                <br>
                Location: <input type="text" name="location">
                <br>
                <br>
                <input type="submit" value="submit" class="btn btn-success">
            </form>

        </div>
    </div>
</div>
@endsection
