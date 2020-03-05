@extends('layout.main')

@section('content')

<!-- {{session('user')}} -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('')}}js/cartScript.js"></script>

<div class="gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Date/Time</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $c)
                    <tr>
                        <td class="cart-item-image">
                            <a>
                                <img src="{{asset('')}}{{$c->img_path}}" alt="Image Alternative text" title="Flower"
                                    height="70px" width="70px" />
                            </a>
                        </td>
                        <td><a href="#">{{$c->name}}</a>
                        </td>
                        <td class="cart-item-quantity"><button class="updateLess" value="{{$c->product_id}}"><i class="fa fa-minus cart-item-minus" ></i></button>
                            <input type="disabled" id="cartQuantity{{$c->product_id}}" name="cart-quantity" class="cart-quantity" value="{{$c->quantity}}">
                            <button class="updateUp" value="{{$c->product_id}}"><i class="fa fa-plus cart-item-plus" value="1"></i></button>
                        </td>
                        <td>{{$c->date_time}}</td>
                        <td>{{$c->selling_price}}/-</td>
                        <td class="cart-item-remove">
                            <button class="dltBtn fa fa-times" value="{{$c->id}}"></button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div class="col-md-3">
            <ul class="cart-total-list">
                <li><span>Sub Total</span><span id="sub">400.00/-</span>
                </li>
                <li><span>Shipping</span><span>0.00/-</span>
                </li>
                <li><span>Taxes</span><span>0.00/-</span>
                </li>
                <li><span>Total</span><span id="total">400.00/-</span>
                </li>
            </ul>
            <a href="{{route('show.transection')}}" class="btn btn-primary btn-lg">Checkout</a>
        </div>
    </div>
    <div class="gap"></div>
</div>

@endsection
