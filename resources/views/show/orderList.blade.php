@extends('layout.main')
@section('content')
<br><br>
<div class="container">

<table class="table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Status</th>

        </tr>
    </thead>  
    <tbody>
    @foreach($orderList as $ol)
        <tr>
            <td>{{$ol->name}}</td>
            <td>{{$ol->price}}</td>
            <td>{{$ol->quantity}}</td>
            <td>{{$ol->total_price}}</td>
            <td>{{$ol->status}}</td>
            <td><a href="{{route('orderTrack', $ol->id)}}" class="btn btn-info">Track</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<br> <br> <br>

@endsection
