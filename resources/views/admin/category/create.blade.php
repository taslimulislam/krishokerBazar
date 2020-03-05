@extends('admin.layout.main')

@section('title')
Category Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>Category</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('category.index')}}">
                <button type="button" class="btn btn-primary">Back to List</button>
            </a>
            <br>
            <br>
            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                Name: <input type="text" name="name" value="{{old('name')}}">
                <br>
                <br>
                Image : <input type="file" name="pic" >
                <br>
                <br>
                <input type="submit" value="submit" class="btn btn-success">

                @if($errors->any())
                <h4 style="color:red">Errors</h4>
                <ul style="color:red">
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
                </ul>
                @endif
                
            </form>
        </div>
    </div>
</div>
@endsection
