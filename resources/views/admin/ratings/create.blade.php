@extends('admin.layout.main')

@section('title')
Ratings Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Ratings</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('ratings.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('ratings.store')}}" method="post">
            @csrf
            Product Id: <input type="number" name="product_id">
            <br>
            <br>
            Customer Id: <input type="number" name="customer_id">
            <br>
            <br>
            Date Time: <input type="text" name="date_time">
            <br>
            <br>
            Rate: <input type="number" name="rate">
            <br>
            <br>
            <input type="submit" value="submit" class="btn btn-success">
            </form>

        </div>
    </div>
</div>
@endsection
