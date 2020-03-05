@extends('admin.layout.main')

@section('title')
Contact
@endsection
@section('content')

<div class="contact-head">
    <div class="container">
        <div class="message">
            <div class="row">
                <div class="col-md-4 title">
                    <h5>Name</h5>
                </div>
                <div class="col-md-4 title">
                    <h5>Phone</h5>
                </div>
                <div class="col-md-4 title">
                    <h5>Message</h5>
                </div>
            </div>
        </div>

        <div class="info">
        @foreach($message as $m)
            <div class="row">
                <div class="col-md-4 message-author">
                    <input type="checkbox" id="" name="" value="Bike">

                    <span class="author-info"><a href="">{{$m->name}}</a></span>
                </div>
                <div class="col-md-4">
                    <span class="author-info"><a href="">{{$m->phone}}</a></span>
                </div>
                <div class="col-md-4">
                    <span class="author-info"><a href=""></a>{{$m->message}}</a></span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>





@endsection
