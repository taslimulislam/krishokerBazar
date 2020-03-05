@extends('admin.layout.main')

@section('title')
Guest Index
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-------------------- table------------------------>
    <div class="">
        <h3>Guest User</h3>
        <h4>Index:</h4>
        <br>
        <table class="table table-hover ">
        

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($guests as $gu)
                <tr>
                    <td>{{$gu->id}}</td>
                    <td>{{$gu->name}}</td>
                    <td>{{$gu->address}}</td>
                    <td>{{$gu->phone}}</td>
                    <td>
                        <a href="{{route('guestUser.edit',$gu->id)}}"><button type="button" class="btn btn-info">Edit</button></a>
                        <a href="{{route('guestUser.show',$gu->id)}}"><button type="button" class="btn btn-info">Details</button></a>
                        <a href="{{route('guest.delete',$gu->id)}}"><button type="button" class="btn btn-info">Delete</button></a>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <a href="{{route('guestUser.create')}}"><button type="button" class="btn btn-info">Create</button></a>
    </div>


    @endsection
