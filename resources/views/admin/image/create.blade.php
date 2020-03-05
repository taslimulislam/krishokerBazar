@extends('admin.layout.main')

@section('title')
Image Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Image</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('image.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('image.store')}}" method="post">
            @csrf
                Product Id: <input type="number" name="product_id">
                <br>
                <br>
                Image Path: <input type="text" name="img_path">
                <br>
                <br>
                <input type="submit" value="submit" class="btn btn-success">
            </form>

        </div>
    </div>
</div>
@endsection
