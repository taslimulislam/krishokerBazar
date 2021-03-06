@extends('layout.main')

@section('content')

<div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside class="sidebar-left">
                        <div class="box clearfix">
                            <!-- <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price </th>
                                    </tr>
                                </thead>
                                @foreach($cartProduct as $cp)
                                <tbody>
                                    <tr>
                                        <td>{{$cp->name}}</td>
                                        <td>{{$cp->quantity}}</td>
                                        <td>{{$cp->selling_price}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table> -->
                            <ul class="cart-total-list text-center mb0">
                                <li><span>Sub Total</span><span>{{$cartTotal}}/-</span>
                                </li>
                                <li><span>Shipping</span><span>0.00/-</span>
                                </li>
                                <li><span>Taxes</span><span>0.00/-</span>
                                </li>
                                <li><span>Total</span><span>{{$cartTotal}}/-</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="#">
                                <!-- <legend>Personal Information</legend> -->
                                <h3>Delivery Information</h3>
                                <br>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control " placeholder="Ifrat">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="+88018XXXXXXXX ">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" placeholder="Nikunja-2, Road-1, Dhaka">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 col-md-offset-1 bkash">
                            <h4>Payment Via <br><br>
                            <span class="bkash">bkash</span> / <span class="rocket">Rocket</span> / <span class="citibank">Card</span></h4>
                            <p>Important: You will be redirected to bkash/Rocket app to securely complete your payment.</p> <br>
                           

                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male"><a href=""><img src="{{asset('')}}users/img/bkash.png" alt="bkash">bkash</a></label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female"><a href=""><img src="{{asset('')}}users/img/rocket.jpg" alt="Rocket">Rocket</a></label><br>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label> <br> <br>


                            <form action="" method="post">
                            @csrf
                            <!-- <p hidden value="{{$cartTotal}}" name="total"></p> -->
                            <input type="hidden" name="total" value="{{$cartTotal}}">
                            <input type="submit" Value="Complete Checkout" class="btn btn-primary">

                           </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>



@endsection