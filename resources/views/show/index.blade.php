@extends('layout.main')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
 <script src="{{asset('')}}js/cartScript.js"></script>

<div class="top-area">
            <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true">
                <div>
                    <div class="bg-holder">
                        <img src="{{asset('')}}users/img/slider/1.jpg" alt="Image Alternative text" title="Image" height="500px" width="1200px" />
                        <div class="bg-mask"></div>
                        <div class="bg-front vert-center text-white text-center">
                            <h2 class="text-hero">Online Facility</h2>
                            <h5>websites are online portals that facilitate online transactions of goods and services through means of the transfer of information and funds over the Internet.</h5>
                            <a href="https://en.wikipedia.org/wiki/Digital_agriculture" class="btn btn-white btn-lg btn-ghost">Learn More</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-holder">
                        <img src="{{asset('')}}users/img/slider/2.jpg" alt="Image Alternative text" title="Image" height="500px" width="1200px" />
                        <div class="bg-mask"></div>
                        <div class="bg-front vert-center text-white text-center">
                            <h2 class="text-hero">Sell in Weekends</h2>
                             <h5>websites are online portals that facilitate online transactions of goods and services through means of the transfer of information and funds over the Internet.</h5>
                            <a href="https://en.wikipedia.org/wiki/Digital_agriculture#" class="btn btn-white btn-lg btn-ghost">Learn More</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-holder">
                        <img src="{{asset('')}}users/img/slider/3.jpg" alt="Image Alternative text" title="Image" height="500px" width="1200px" />
                        <div class="bg-mask"></div>
                        <div class="bg-front vert-center text-white text-center">
                            <h2 class="text-hero">Popular Item</h2>
                             <h5>websites are online portals that facilitate online transactions of goods and services through means of the transfer of information and funds over the Internet.</h5>
                            <a href="https://en.wikipedia.org/wiki/Digital_agriculture" class="btn btn-white btn-lg btn-ghost">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA -->

        <div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                    <div class="text-center">
                        <h1>WHO WE ARE</h1>
                        <h4>“WE KNOW YOU DON’T WANT TO BE LIMITED”</h4>
                        <p class="text-bigger">The site will guide the farmers in all the aspects, the current market rate of different products, the total sale and the earned profit for the sold products</p>
                    </div>
                </div>
            </div>
        </div>

        <!------------------Category------------------>
        
    <section class="section-category">
        <div class="container">
            <div class="container bg-holder-content">
                <div class="gap gap-big text-center">
                    <h1 class="mb30">Category</h1>
                    <div class="row row-wrap">
                        @foreach($category as $cat)
                            <a class="col-md-2 col-sm-2" href="{{route('category.subcategory',$cat->id)}}">
                                <div class="product-thumb">
                                    <header class="product-header">
                                        <img src="{{asset($cat->img_path)}}" alt="Image Alternative text" title="Dairy" height="110px" />
                                    </header>
                                    <div class="product-inner">
                                        <h5 class="product-title">{{$cat->name}}</h5>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>	
                </div>
            </div>
        </div>
    </section> 


    @if(session('user') != null)
                    <!------------------Popular on area------------------>
    <section class="popular">
        <div class="container">
            <div class="container bg-holder-content">
            <div class="text-center">
                <h1 class="mb30">Just For You </h1>
                    <div class="row row-wrap">
                    @foreach($jfy as $jy)
                        <div class="col-md-3 col-sm-3">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="{{asset('')}}{{$jy->img_path}}" alt="Image Alternative text" title="Popular on your area" height="150px" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">{{$jy->name}}</h5>
                                    <p class="product-desciption">{{$jy->description}}</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">{{$jy->selling_price}}/-</span>
                                            </li>
                                            <!-- <li><span class="product-old-price">{{$jy->buying_price}}</span>
                                            </li> -->
                                            <!-- <li><span class="product-save">Save 39%</span>
                                            </li> -->
                                        </ul>
                                        <!-- <ul class="icon-group icon-list-rating icon-list-non-rated" title="3/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul> -->
                                        <ul class="product-actions-list">
                                        <li><button class="cartBtn btn btn-sm" value="{{$jy->id}}"><i class="fa fa-shopping-cart"></i> Add To Cart</Button>
                                                </li>
                                            <li><a class="btn btn-sm" href="{{route('productDetails' , $jy->id)}}"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>  
                    <!-- <a href="product.html" class="btn btn-white btn-lg btn-ghost">See More</a> -->
                </div>
            </div>
        </div>
    </section>
@endif
        <!------------------Upcoming product------------------>

    <section class="upcoming">
        <div class="container">
            <div class="container bg-holder-content">
                <div class="gap text-center">
                    <h1 class="mb30">Upcoming Product</h1>
                    <div class="row row-wrap">
                        @foreach($upcomming as $uc)
                        <a class="col-md-3" href="{{route('productDetails' , $uc->id)}}">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="{{asset($uc->img_path)}}" alt="Image Alternative text" title="Upcomming Product" height="200px" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title">{{$uc->name}}</h5>
                                    <p class="product-desciption">{{$uc->description}}</p>
                                    <ul class="product-price-list">
                                        <li><span class="product-price">{{$uc->buying_price}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>  
                    <!-- <a href="product.html" class="btn btn-white btn-lg btn-ghost">See More</a> -->
                </div>
            </div>
        </div>
    </section>
    <section>
            <div class="contact_form_area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="contact_info">
                                <h1>Have <br/>You Any Question<br/>About Us?</h1>
                                <br/>
                                <h4>Any kind of business solution and consultion don’t<br/>hesitate to contact with us for imiditate customer<br/>support. We are love to hear from you</h4>
                                <br/>
                                <br/>
                                <p><span class="communication">Communication</span><br> For any information contact with us<br/>through our Email and you can also contact with directe.<br/></p>
                                <p><span>Phone :</span><br> (+880) 1234567890<br/></p>
                                <p><span>Email :</span><br> admin@info.com<br/></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form action="" method="post">
                            @csrf
                                <div class="form">
                                    <h1>Get In Touch!!</h1>
                                    <div class="contact_form fix">
                                        <div class="form1">
                                            <input type="text" placeholder="Name*" name="name"/>
                                            <span class="input"><input type="text" placeholder="Phone*" name="phone"/></span>
                                        </div>
                                        <div class="form2">
                                            <input type="email" name="email" placeholder="Email"/>
                                        </div>
                                        <div class="form3">
                                            <textarea cols="30" name="message" rows="4" placeholder="Message*" ></textarea>
                                        </div>
                                        <div class="form_button fix">
                                            <input type="submit" value="Send"/>
                                        </div>          
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection