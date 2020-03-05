<header class="main">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6 menu-user">
                <!--START MAIN NAVIGATION -->
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav">
                        <li class="logo"><img src="{{asset('')}}users/img/logo.png" alt=""></li>
                        <li class="active"><a href="{{route('index')}}">Home</a></li>
                        <li><a href="#">Category</a>
                            <ul>
                                @foreach($categorys as $c)
                                <li><a href="{{route('category.subcategory',$c->id)}}">{{$c->name}}</a>
                                    <ul>
                                        @foreach($subCategorys as $sc)
                                        @if($c->id == $sc->category_id)
                                        <li><a href="{{route('subcategory.product',$sc->id)}}">{{$sc->name}}</a></li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('agri_info')}}">Agriculture Info</a></li>
                        @if(session('user') != null)
                        @if($userType != null)
                        <li><a href="#">Product</a>
                            <ul>
                                <li><a href="{{route('myProduct')}}">My Product</a></li>
                                <li><a href="{{route('product.upload')}}">Add Product</a></li>
                            </ul>
                        </li>
                        @else
                        <li><a href="#">Product</a>
                            <ul>
                                <li><a href="{{route('createSeller')}}">Want to be a seller</a></li>
                            </ul>
                        </li>
                        @endif

                        @endif
                    </ul>
                </nav>
                <!-- END MAIN NAVIGATION -->
            </div>
            <div class="col-md-6">
                <!-- LOGIN REGISTER LINKS -->
                @if(session('user') != null)
                <ul class="login-register">
                    <li class="shopping-cart"><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i>My Cart</a>
                    </li>

                    <!-- <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Sign in</a>
                            </li>
                            <li><a  href="{{Route('register.create')}}" ><i class="fa fa-edit"></i>Sign up</a>
                            </li> -->
                    <li><a href="{{Route('login.logout')}}"><i class="fa fa-sign-out"></i>Sign out</a>
                    </li>
                    <li><a href="{{route('profile')}}"><i class="fa fa-user">{{$customers->name}}</i></a>
                    </li>
                </ul>
                @else
                <ul class="login-register">
                    <!-- <li class="shopping-cart"><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i>My Cart</a>
                            </li> -->

                    <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i
                                class="fa fa-sign-in"></i>Sign in</a>
                    </li>
                    <li><a href="{{Route('register.create')}}"><i class="fa fa-edit"></i>Sign up</a>
                    </li>
                    <!-- <li><a href="{{Route('login.logout')}}"><i class="fa fa-sign-out"></i>Sign out</a>
                            </li> -->
                    <!-- <li><a href="#"><i class="fa fa-user"></i></a>
                            </li> -->
                </ul>
                @endif
            </div>
        </div>
    </div>
</header>

<!-- LOGIN REGISTER LINKS CONTENT -->
<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-sign-in dialog-icon"></i>
    <h3>User Login</h3>
    <h5>Welcome back, Login to get started</h5>

    <form class="dialog-form" action="/login" method="post">
    
        @csrf
        <div class="form-group">
            <label>Uasrname</label>
            <input type="text" name="userName" placeholder="username" class="form-control" value="{{old('userName')}}">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control"
                value="{{old('password')}}">
        </div>
        @if(session('msg')=='false')
        <p>username or password not matched</p>
        @endif

        <input type="submit" value="submit" class="btn btn-primary">
    </form>

</div>




<!-- END LOGIN REGISTER LINKS CONTENT -->

<!-- SEARCH AREA -->
<form autocomplete="off" class="search-area form-group">
    <div class="container">
        <div class="row">
            <div class="col-md-8 clearfix">
                <label><i class="fa fa-search"></i><span>I am searching for</span>
                </label>
                <div class="search-product search-product-input">
                    <input class="form-control" type="text" name="name" id="search" placeholder="Reliable Product" />
                    <div id="productList">
                    </div>
                </div>
                @csrf
            </div>
            <div class="col-md-3 clearfix">
                <label><i class="fa fa-map-marker"></i><span>In</span>
                </label>
                <div class="search-area-division search-area-division-location">
                    <input class="form-control" type="text" name="name" id="areaSearch" placeholder="Your Area" />
                </div>
            </div>
            <div class="col-md-1">
                <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
            </div>
        </div>
    </div>
</form>
<!-- END SEARCH AREA -->
