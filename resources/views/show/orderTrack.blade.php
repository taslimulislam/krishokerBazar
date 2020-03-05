@extends('layout.main')
@section('content')
<br> <br>
<div class="shipping">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head-text text-center">
                    <h3>My Transection details</h3>
                    <br><br>
                </div>

                @if($orderTrack->status == "onprocess")
                <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-warning btn-circle">1</button>
                            <p>On Process</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">2</button>
                            <p>Shipping</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">3</button>
                            <p>Destination</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">4</button>
                            <p>Delivered</p>
                        </div>
                    </div>
                </div>

                @elseif($orderTrack->status == "shipping")
                <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-warning btn-circle">1</button>
                            <p>On Process</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle">2</button>
                            <p>Shipping</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">3</button>
                            <p>Destination</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">4</button>
                            <p>Delivered</p>
                        </div>
                    </div>
                </div>

                @elseif($orderTrack->status == "destination")
                <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-warning btn-circle">1</button>
                            <p>On Process</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle">2</button>
                            <p>Shipping</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-info btn-circle">3</button>
                            <p>Destination</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">4</button>
                            <p>Delivered</p>
                        </div>
                    </div>
                </div>

                @elseif($orderTrack->status == "delivered")
                <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-warning btn-circle">1</button>
                            <p>On Process</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle">2</button>
                            <p>Shipping</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-info btn-circle">3</button>
                            <p>Destination</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-success btn-circle">4</button>
                            <p>Delivered</p>
                        </div>
                    </div>
                </div>

                @else($orderTrack->status == "delivered")
                <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">1</button>
                            <p>On Process</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">2</button>
                            <p>Shipping</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class=" btn-circle">3</button>
                            <p>Destination</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn-circle">4</button>
                            <p>Delivered</p>
                        </div>
                    </div>
                </div>


                @endif

            </div>
        </div>
    </div>
    <br> <br> <br> <br>

@endsection