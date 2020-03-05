@extends('layout.main')

@section('content')
<div class="gap"></div>
    <section class="popular">
        <div class="container">
            <div class="container bg-holder-content">
            <div class="text-center">
                <h1 class="mb30">Types of product of Category</h1>
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
                       
                           @foreach($category as $subcat)
                            <div class="col-md-3 col-sm-3">
                                <div class="product-thumb">
                                    <a href="{{route('subcategory.product',$subcat->id)}}">
                                        <header class="product-header">
                                            <img src="{{asset($subcat->img_path)}}" alt="Image Alternative text" title="Flower" height="150px" />
                                        </header>
                                    </a>
                                    <div class="product-inner">
                                        <h5 class="product-title">{{$subcat->name}}</h5>
                                        <p class="product-desciption">{{$subcat->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        


                        <!-- <div class="col-md-3 col-sm-3">
                            <div class="product-thumb">
                                <a href="product.html">
                                    <header class="product-header">
                                        <img src="{{asset('')}}users/img/image/flower2.jpg" alt="Image Alternative text" title="Flower" height="150px" />
                                    </header>
                                </a>
                                <div class="product-inner">
                                    <h5 class="product-title">Sun-folower</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="product-thumb">
                                <a href="product.html">
                                    <header class="product-header">
                                        <img src="{{asset('')}}users/img/image/flower3.jpg" alt="Image Alternative text" title="Flower" height="150px" />
                                    </header>
                                </a>
                                <div class="product-inner">
                                    <h5 class="product-title">Tulip</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="product-thumb">
                                <a href="product.html">
                                    <header class="product-header">
                                        <img src="{{asset('')}}users/img/image/flower2.jpg" alt="Image Alternative text" title="Flower" height="150px" />
                                    </header>
                                </a>
                                <div class="product-inner">
                                    <h5 class="product-title">Lotus</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="product-thumb">
                               <a href="product.html">
                                    <header class="product-header">
                                        <img src="{{asset('')}}users/img/image/flower3.jpg" alt="Image Alternative text" title="Flower" height="150px" />
                                    </header>
                                </a>
                                <div class="product-inner">
                                    <h5 class="product-title">Bluebell</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="product-thumb">
                                <a href="product.html">
                                    <header class="product-header">
                                        <img src="{{asset('')}}users/img/image/flower1.jpg" alt="Image Alternative text" title="Flower" height="150px" />
                                    </header>
                                </a>
                                <div class="product-inner">
                                    <h5 class="product-title">Cherry blossom</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="product-thumb">
                                <a href="product.html">
                                    <header class="product-header">
                                        <img src="{{asset('')}}users/img/image/flower2.jpg" alt="Image Alternative text" title="Flower" height="150px" />
                                    </header>
                                </a>
                                <div class="product-inner">
                                    <h5 class="product-title">Crocus</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="product-thumb">
                                <a href="product.html">
                                    <header class="product-header">
                                        <img src="{{asset('')}}users/img/image/flower1.jpg" alt="Image Alternative text" title="Flower" height="150px" />
                                    </header>
                                </a>
                                <div class="product-inner">
                                    <h5 class="product-title">Water lily</h5>
                                    <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                </div>
                            </div>
                        </div> -->
                    </div>  
                    <!-- <a href="product.html" class="btn btn-white btn-lg btn-ghost">See More</a> -->
                    <div class="gap"></div>
                </div>
            </div>
        </div>
    </section>

@endsection