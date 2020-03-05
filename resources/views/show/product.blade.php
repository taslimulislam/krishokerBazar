@extends('layout.main')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('')}}js/cartScript.js"></script>

<div class="gap"></div>
    <section class="popular">
        <div class="container">
            <div class="container bg-holder-content">
            <div class="text-center">
                <h1 class="mb30">Product of this Category</h1>
                <p>Here you find all types of product that you want to.Also sell your product using this category</p>
                <br><br><br>
                    <!-- <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-sort">
                                    <span class="product-sort-selected">sort by <b>Price</b></span>
                                    <a href="#" class="product-sort-order fa fa-angle-down"></a>
                                    <ul>
                                        <li><a href="#">sort by High To Low</a>
                                        </li>
                                        <li><a href="#">sort by Law to High</a>
                                        </li>
                                        <li><a href="#">sort by Date</a>
                                        </li>
                                        <li><a href="#">sort by Rating</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row row-wrap">
                        @foreach($product as $p)
                            <div class="col-md-3 col-sm-3">
                                <div class="product-thumb">
                                    <header class="product-header">
                                        <img src="{{asset($p->img_path)}}" alt="Image Alternative text" title="Flower" height="200px" />
                                    </header>
                                    <div class="product-inner">
                                        <h5 class="product-title">{{$p->name}}</h5>
                                        <p class="product-desciption">{{$p->description}}</p>
                                        <div class="product-meta">
                                            <ul class="product-price-list">
                                                <li><span class="product-price">{{$p->buying_price}}</span>
                                                </li>
                                                <li><span class="product-old-price">{{$p->old_price}}</span>
                                                </li>
                                                <li><span class="product-save">Save 39%</span>
                                                </li>
                                            </ul>
                                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="3/5 rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i> </li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><span class="quantity">{{$p->quantity}} Sold</span></li>
                                            </ul>
                                            <ul class="product-actions-list">
                                                <li><button class="cartBtn btn btn-sm" value="{{$p->id}}"><i class="fa fa-shopping-cart"></i> Add To Cart</Button>
                                                </li>
                                                <li><a class="btn btn-sm" href="{{route('productDetails' , $p->id)}}"><i class="fa fa-bars"></i> Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>  
                <!-- <a href="product.html" class="btn btn-white btn-lg btn-ghost">See More</a> -->
                <div class="gap"></div>
            </div>
        </div>
    </div>
</section>


@endsection