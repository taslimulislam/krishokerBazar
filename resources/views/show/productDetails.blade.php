@extends('layout.main')

@section ('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('')}}js/cartScript.js"></script>
<div class="container">
    <div class="row">
    <div class="gap"></div>
        <div class="col-md-7">
            <div class="row">

                <div class="col-md-6">
                    <div class="fotorama details-img" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="100"
                        data-thumbwidth="100">
                        <img src="{{asset($productDetails->img_path)}}" alt="Image Alternative text" title="Flower" />
                        <img src="{{asset($productDetails->img_path)}}" alt="Image Alternative text" title="Flower" />
                        <img src="{{asset($productDetails->img_path)}}" alt="Image Alternative text" title="Flower" />
                        <img src="{{asset($productDetails->img_path)}}" alt="Image Alternative text" title="Flower" />
                        <img src="{{asset($productDetails->img_path)}}" alt="Image Alternative text" title="Flower" />
                    </div>
                    

                </div>

                <div class="col-md-6">
                    <div class="product-info box">
                        <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul> <small><a href="#" class="text-muted">Based on 3 reviews</a></small>
                        <h3>{{$productDetails->name}}</h3>
                        <h2 class="text-color">{{$productDetails->buying_price}}</h2>
                        <p class="product-info-price"></p>
                        <p class="text-smaller text-muted">{{$productDetails->description}}</p>
                        <!-- <ul class="icon-list list-space product-info-list">
                                    <li><i class="fa fa-check"></i>Black Rose</li>
                                    <li><i class="fa fa-check"></i>Black Rose</li>
                                    <li><i class="fa fa-check"></i>Black Rose</li>
                                    <li><i class="fa fa-check"></i>Black Rose</li>
                                </ul> -->

                        <ul class="list-inline">
                            <li><button class="cartBtn btn btn-primary" value="{{$productDetails->id}}"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                            </li>
                            <a href="{{route('productBuy' , $productDetails->id)}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-5">
                <div id="chartContainer" ></div>
            </div>
            
            
            <div class="gap"></div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Review</a>
                    </li>
                    <!-- <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-info"></i>Reviwes</a>
                    </li> -->
                </ul>
                <div class="tab-content">
                    <!-- <div class="tab-pane fade in active" id="tab-1">
                        <table class="table table-striped mb0">
                            <tbody>
                                <tr>
                                    <td>Scientific name </td>
                                    <td>Rosa</td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>Black</td>
                                </tr>
                                <tr>
                                    <td>Size</td>
                                    <td>12Inch</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> -->
                    <!-- <div class="tab-pane fade in active" id="tab-1"> -->
                        <ul class="comments-list">
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="{{asset('')}}users/img/gamer_chick_50x50.jpg" alt="Image Alternative text"
                                            title="Gamer Chick" />
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
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
                                        </ul><span class="comment-author-name">Alison Mackenzie</span>
                                        <p class="comment-content">Potenti diam ridiculus enim per orci aliquet quam
                                            proin sit neque porta conubia nam iaculis phasellus nam dignissim tincidunt
                                            sapien eros nam bibendum nunc vehicula accumsan lacus</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="{{asset('')}}users/img/ana_29_50x50.jpg" alt="Image Alternative text" title="Ana 29" />
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Olivia Slater</span>
                                        <p class="comment-content">Nisl justo natoque pharetra adipiscing ultricies
                                            aliquam erat in condimentum hendrerit vulputate lacus fames aliquet volutpat
                                            habitasse himenaeos adipiscing sociosqu tincidunt</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="{{asset('')}}users/img/amaze_50x50.jpg" alt="Image Alternative text" title="Amaz" />
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
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
                                        </ul><span class="comment-author-name">AmaZ</span>
                                        <p class="comment-content">Vivamus lacinia accumsan facilisi feugiat lectus
                                            etiam nostra dis curabitur conubia pulvinar nascetur</p>
                                    </div>
                                </article>
                            </li>
                        </ul>
                        <a class="popup-text btn btn-primary" href="#review-dialog" data-effect="mfp-zoom-out"><i
                                class="fa fa-pencil"></i> Add a review</a>
                    </div>
                </div>
            </div>

            <div class="gap"></div>
            <h3>Related Porducts</h3>
            <div class="gap gap-mini"></div>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="{{asset('')}}users/img/image/dairy3.jpg" alt="Image Alternative text"
                                title="The Hidden Power of the Heart" height="200px" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Dairy</h5>
                            <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">220/-</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="page-checkout.html"><i
                                                class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm" href="product-shop-sidebar.html"><i
                                                class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="{{asset('')}}users/img/image/fish2.jpg" alt="Image Alternative text"
                                title="the best mode of transport here in maldives" height="200px" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.8/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Fish</h5>
                            <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">130/-</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="page-checkout.html"><i
                                                class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm" href="product-shop-sidebar.html"><i
                                                class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="{{asset('')}}users/img/image/fruit2.jpg" alt="Image Alternative text" title="Cup on red"
                                height="200px" />
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.5/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Fruit</h5>
                            <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">149/-</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="page-checkout.html"><i
                                                class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm" href="product-shop-sidebar.html"><i
                                                class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="gap gap-small"></div>
    </div>
    
</div>

</div>



@endsection
