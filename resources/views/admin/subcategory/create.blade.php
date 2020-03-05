@extends('admin.layout.main')

@section('title')
SubCategory Create
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <h3>SubCategory</h3>
        <h4>create:</h4>
        <br>
        <div class="container">
            <a href="{{route('subcategory.index')}}"><button type="button" class="btn btn-info">Back to List</button></a>
            <br>
            <br>
            <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                Name: <input type="text" name="name">
                <br>
                <br>
                Description: <input type="text" name="description">
                <br>
                <br>
                <select name="category_id" id="">
                @foreach($categorys as $c)
                <option value="{{$c->id}}">{{$c->id}} : {{$c->name}} </option>
                @endforeach
                </select>
                <!-- Category Id: <input type="text" name=""> -->
                <br>
                <br>
                Image : <input type="file" name="pic" >
                    <br>
                    <br>
                <input type="submit" value="submit" class="btn btn-success">
            </form>
            @if($errors->any())
                <h4 style="color:red">Errors</h4>
                <ul style="color:red">
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
                </ul>
                @endif

        </div>
    </div>
</div>
@endsection
