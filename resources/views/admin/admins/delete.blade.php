@extends('admin.layout.main')

@section('title')
Admin Delete
@endsection

@section('content')
<div class="content-wrapper section-content">
    <div class="container">
    <br><br>
        <h3>Admin</h3>
        <h4>Delete:</h4>
        
        <br>
        <div class="container">
        
            <a href="{{route('admin.edit',$admin->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="{{route('admin.index')}}"><button type="button" class="btn btn-primary">Back to List</button></a>
            <br>
            <br>
            <td>
                 <img src="{{asset('')}}{{$admin->img_path}}" alt="Image Alternative text"
                title="{{$admin->name}}" height="80px" width="100"/>
            </td>
            <br>
            <br>
            <p>Id: {{$admin->id}}</p>
            
            <p>login id: {{$admin->login_id}}</p>
            
            <p>Name: {{$admin->name}}</p>
            
            <p>Phone: {{$admin->phone}}</p>
            
            <p>Email: {{$admin->email}}</p>
            
            <p>Join Date: {{$admin->join_date}}</p>
            <br>
            
            <h6 style="color:red">Are you sure want to delete?</h6>
            <form action="{{route('admin.destroy',$admin->id)}}" method="post">
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
