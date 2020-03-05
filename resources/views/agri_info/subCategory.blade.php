@extends('agri_info.layout.main')

@section('content')
<br> <br>

<div class="container">
    <div class="row">
        @foreach($agriSubcategory as $as)
        <div class="col-md-4 col-sm-4">
            <div class="product-thumb">
                <a href="{{route('agri_info.product',$as->id)}}">
                    <header class="product-header">
                        <img src="{{asset('')}}{{$as->img_path}}" alt="Image Alternative text" title="{{$as->name}}"
                            height="200px" />
                    </header>
                </a>
                <div class="product-inner">
                    <h5 class="product-title">{{$as->name}}</h5>
                    <p class="product-desciption">{{$as->description}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br> <br>

@endsection
