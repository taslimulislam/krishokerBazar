@extends('layout.main')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('')}}js/script.js"></script>
<!-- <div class="">
    <div class="container">
        <div class="row">
            <div class="container emp-profile">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-img">
                            <img src="{{asset('')}}users/img/profile.jpg" alt="" />
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="gap"></div>
<div class="product-upload">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 heading-up">
                    <div class="gap"></div>
                    <h2>Upload Product</h2>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="upload-field text-center">
                            <img src="{{asset('')}}users/img/file.png" class="" alt="avatar" height="250px">
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
                <div class="col-md-12 ">
                    <div class="up-text text-center">
                        <form action="" method="post" id="registrationForm" enctype="multipart/form-data">
                            @csrf
                            <button><input type="file" name="picture"></button>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-md-offset-1">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <!-- <form class="form" action="#" method="post" id="registrationForm"> -->
                                <!-- @csrf -->
                                <div class="form-group">
                                    <div class="col-md-6 label-heading">
                                        <label for="category">
                                            <h4>Category <span>*</span> </h4>
                                        </label>
                                        <select class="form-control category" name="category" >
                                        <option disabled selected>--Select One--</option>
                                            @foreach($categorys as $c)
                                            
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                            <!-- <option value="saab">Fruit</option>
                                                    <option value="vw">Flower</option>
                                                    <option value="audi" selected>Oil</option> -->
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 label-heading">
                                        <label for="subcategory">
                                            <h4>SubCategory <span>*</span></h4>
                                        </label>
                                        <select class="form-control" name="subCategory" id="subCategory">
                                            
                                            <!-- <option disabled selected value="--Select one--" >--Select one--</option> -->
                                            <option value="" disabled selected>--Select One--</option>
                        
                                        
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 label-heading">
                                        <label for="name">
                                            <h4>Product Name <span>*</span></h4>
                                        </label>
                                        <input type="text" class="form-control" name="productName"
                                            placeholder="Product name" title="Write your product name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 label-heading">
                                        <label for="description">
                                            <h4>Description <span>*</span></h4>
                                        </label>
                                        <input type="text" class="form-control" name="description"
                                            placeholder="Product Description" title="Write your product description">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 label-heading">
                                        <label for="price">
                                            <h4>Buying Price <span>*</span></h4>
                                        </label>
                                        <input type="text" class="form-control" name="buyingPrice"
                                            placeholder="Buying price" title="enter your product price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 label-heading">
                                        <label for="price">
                                            <h4>Selling Price <span>*</span></h4>
                                        </label>
                                        <input type="text" class="form-control" name="sellingPrice"
                                            placeholder="Selling price" title="enter your product price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 label-heading">
                                        <label for="quantity">
                                            <h4>Net Quantity <span>*</span></h4>
                                        </label>
                                        <input type="number" name="quantity" class="form-control" placeholder="Quantity"
                                            title="enter your product quantity">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 label-heading">
                                        <label for="location">
                                            <h4>Location <span>*</span></h4>
                                        </label>
                                        <input type="text" name="location" class="form-control"
                                            placeholder="Your Current Location" title="enter your current Location">
                                    </div>
                                </div>

                                <hr>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <input class="btn btn-lg btn-success pull-left" value="Upload Files" type="submit">
                                <span style="margin-left:10px">or</span>
                                <button class="btn btn-lg" type="reset">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br><br>


@endsection
