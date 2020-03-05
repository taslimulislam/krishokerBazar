@extends('agri_info.layout.main')

@section('content')

<br><br>
<div class="container">
    @foreach($agriProduct as $ap)
    <H4>Rice Growing Process:</H4>
    <br>
    <div class="row">
    <div class="col-md-3 col-sm-3">
    <img src="{{asset('')}}agri_information/image/rice1.jpg" alt="nai">
    </div>
    <div class="col-md-3 col-sm-3">
    <img src="{{asset('')}}agri_information/image/rice2.jpg" alt="nai">
    </div>
    <div class="col-md-3 col-sm-3">
    <img src="{{asset('')}}agri_information/image/1.jpg" alt="nai">
    </div>
    <div class="col-md-3 col-sm-3">
    <img src="{{asset('')}}agri_information/image/plant.jpg" alt="nai">
    </div>
    </div>
    <br><br>
    {{$ap->process1}}
    {{$ap->process2}}
    {{$ap->process3}}
    <br><br><br>
    <div class="row">
    <div class="col-md-3 col-sm-3">
    <img src="{{asset('')}}agri_information/image/rice4.jpg" alt="nai">
    </div>
    <div class="col-md-3 col-sm-3">
    <img src="{{asset('')}}agri_information/image/3.jpg" alt="nai">
    </div>
    <div class="col-md-3 col-sm-3">
    <img src="{{asset('')}}agri_information/image/rice5.jpg" alt="nai">
    </div>
    <div class="col-md-3 col-sm-3">
    <img src="{{asset('')}}agri_information/image/rice.jpg" alt="nai">
    </div>
    </div>
    <br><br>
    {{$ap->process4}}    
    {{$ap->process5}}    
    {{$ap->process6}}    
    {{$ap->process7}}
    
    @endforeach   

</div>
<br><br>

@endsection
