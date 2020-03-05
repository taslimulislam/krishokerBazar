@extends('admin.layout.main')

@section('title')
Ratings Delete
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <h3>Ratings</h3>
        <h4>Delete:</h4>
        <br>
        <div class="container">
        <a href="{{route('ratings.edit',$ratings->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('ratings.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <p>Id: {{$ratings->id}}</p>
            <br>
            <p>Product Id: {{$ratings->product_id}}</p>
            <br>
            <p>Customer Id: {{$ratings->customer_id}}</p>
            <br>
            <p>Date Time: {{$ratings->date_time}}</p>
            <br>
            <p>Rate: {{$ratings->rate}}</p>
            <br>
            <h6 style="color:red">Are you sure want to delete?</h6>
            <form action="{{route('ratings.destroy',$ratings->id)}}" method="post">
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
