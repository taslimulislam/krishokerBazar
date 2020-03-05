@extends('admin.layout.main')

@section('title')
Home
@endsection
@section('content')


    <div class="section-text text-center">
        <h2>Dashboard</h2>
    </div> <br>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('admin.index')}}">
                            <div class="card bg-danger">
                                <div class="card-body text-center">
                                    <p class="card-text">Admin</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i> </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> -->
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('login.index')}}">
                            <div class="card bg-success">
                                <div class="card-body text-center">
                                    <p class="card-text">Login</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('category.index')}}">
                            <div class="card bg-danger">
                                <div class="card-body text-center">
                                    <p class="card-text">Category</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('subcategory.index')}}">
                            <div class="card bg-success">
                                <div class="card-body text-center">
                                    <p class="card-text">subcategory</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('customer.index')}}">
                            <div class="card bg-warning">
                                <div class="card-body text-center">
                                    <p class="card-text">Customer</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('seller.index')}}">
                            <div class="card bg-info">
                                <div class="card-body text-center">
                                    <p class="card-text">seller</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('product.index')}}">
                            <div class="card bg-primary">
                                <div class="card-body text-center">
                                    <p class="card-text">Product</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('image.index')}}">
                            <div class="card bg-info">
                                <div class="card-body text-center">
                                    <p class="card-text">Image</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('cart.index')}}">
                            <div class="card bg-info">
                                <div class="card-body text-center">
                                    <p class="card-text">Cart</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('invoice.index')}}">
                            <div class="card bg-primary">
                                <div class="card-body text-center">
                                    <p class="card-text">invoice</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('transection.index')}}">
                            <div class="card bg-danger">
                                <div class="card-body text-center">
                                    <p class="card-text">transection</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('location.index')}}">
                            <div class="card bg-warning">
                                <div class="card-body text-center">
                                    <p class="card-text">Location</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-item">
                        <a href="{{route('ratings.index')}}">
                            <div class="card bg-success">
                                <div class="card-body text-center">
                                    <p class="card-text">Ratings</p>
                                    <h6 class="details-text">View Details <i class="fa fa-angle-right"></i></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
        
        
       
        
        
        
        
        
        
        
        
        
        
        



@endsection
