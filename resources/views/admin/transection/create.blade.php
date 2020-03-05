@extends('admin.layout.main')

@section('title')
Transection Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Transection</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('transection.index')}}"><button type="button" class="btn btn-info">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('transection.store')}}" method="post">
            @csrf
            Total Price: <input type="number" name="total_price">
            <br>
            <br>
            Date Time: <input type="text" name="date_time">
            <br>
            <br>
            Customer Id: <input type="number" name="customer_id">
            <br>
            <br>
            <input type="submit" value="submit" class="btn btn-success">
            </form>


        </div>
    </div>
</div>
@endsection
