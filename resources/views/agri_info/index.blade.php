@extends('agri_info.layout.main')

@section('content')

<br><br>

<div class="container">
    <div class="row">
        @foreach($agriCategory as $ac)
        <div class="col-md-4 col-sm-4">
            <div class="product-thumb">
                <a href="{{route('agri_info.subCategory',$ac->id)}}">
                    <header class="product-header">
                        <img src="{{asset('')}}{{$ac->img_path}}" alt="Image Alternative text"
                            title="{{$ac->name}}" height="200px" />
                    </header>
                </a>
                <div class="product-inner">
                    <h5 class="product-title">{{$ac->name}}</h5>
                    <p class="product-desciption">{{$ac->description}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach

        
    </div>

    <br><br>

    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="product-thumb">
                <a href="{{route('agri_info.conservation')}}">
                    <header class="product-header">
                        <img src="{{asset('')}}agri_information/image/potato.jpg" alt="Image Alternative text"
                            title="Conservation of Crops" height="200px" />
                    </header>
                </a>
                <div class="product-inner">
                    <h5 class="product-title">Conservation</h5>
                    <p class="product-desciption">Conservation is a farming system that can prevent losses of arable
                        land while regenerating degraded lands</p>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-4">
            <div class="product-thumb">
                <a href="{{route('agri_info.marketing')}}">
                    <header class="product-header">
                        <img src="{{asset('')}}agri_information/image/market.jpg" alt="Image Alternative text"
                            title="Marketing" height="200px" />
                    </header>
                </a>
                <div class="product-inner">
                    <h5 class="product-title">Marketing</h5>
                    <p class="product-desciption">Marketing covers the services involved in moving an agricultural
                        product from the farm to the consumer</p>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-4">
            <div class="product-thumb">
                <a href="{{route('agri_info.farmer')}}">
                    <header class="product-header">
                        <img src="{{asset('')}}agri_information/image/farmer.jpg" alt="Image Alternative text"
                            title="Farmer Health" height="200px" />
                    </header>
                </a>
                <div class="product-inner">
                    <h5 class="product-title">Farmer Health</h5>
                    <p class="product-desciption">Farmer Health aims to improve the health, safety, and wellbeing of
                        farmers, their families.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br><br>
</div>
@endsection
