@extends('layout.main')

@section('content')
<div class="user-ph">
    <h2>My Products</h2>
</div>
<div class="uploaded-product">
    <div class="row">
        <div class="col-md-12 my-product text-center ">
            <div class="row">
                <div class="col-md-2 title">
                    <h5>Image</h5>
                </div>
                <div class="col-md-1 title">
                    <h5>Category</h5>
                </div>
                <div class="col-md-1 title">
                    <h5>Subcategory</h5>
                </div>
                <div class="col-md-2 title">
                    <h5>Name</h5>
                </div>
                <div class="col-md-3 title">
                    <h5>Description</h5>
                </div>
                <div class="col-md-1 title">
                    <h5>Buying Price</h5>
                </div>
                <div class="col-md-1 title">
                    <h5>Selling Price</h5>
                </div>
                <div class="col-md-1 title">
                    <h5>Quantity</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="info">
        @foreach($products as $p)
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="col-md-2 author">
                    <input type="checkbox" id="" name="">
                    <img src="{{asset('')}}{{$p->img_path}}" alt="Image Alternative text" height="50px" width="50px" />
                </div>
                <div class="col-md-1">
                    <span class="author-info"><a href="">{{$p->catgory_name}}</a></span>
                </div>
                <div class="col-md-1">
                    <span class="author-info"><a href=""></a>{{$p->subcat_name}}</a></span>
                </div>
                <div class="col-md-2">
                    <span class="author-info"><a href=""></a>{{$p->name}}</a></span>
                </div>
                <div class="col-md-3">
                    <span class="author-info"><a href=""></a>{{$p->description}}</a></span>
                </div>
                <div class="col-md-1">
                    <span class="author-info"><a href=""></a>{{$p->buying_price}}</a></span>
                </div>
                <div class="col-md-1">
                    <span class="author-info"><a href=""></a>{{$p->selling_price}}</a></span>
                </div>
                <div class="col-md-1">
                    <span class="author-info"><a href=""></a>{{$p->quantity}}</a></span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
