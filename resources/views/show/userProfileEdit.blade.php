@extends('layout.main')

@section('content')

    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <h1>Profile</h1>
            </div>
            <div class="col-md-2 col-sm-2">
                <a href="/users" class="pull-right">
                    <img title="profile image" class="img-circle img-responsive" src="{{asset('')}}{{$cus->img_path}}">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail"
                        alt="avatar" height="100px" width="100px">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="https://ifrat.info/">Ifrat.info</a></div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="tab-content">
                    <hr>
                    <form class="form" method="post" id="registrationForm">
                        <div class="form-group">
                            @csrf
                            <div class=" col-md-6 col-xs-6">
                                <label for="name">
                                    <h4>Name</h4>
                                </label>
                                <input type="text" class="form-control" name="name" value="{{$cus->name}}"
                                    placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6 col-xs-6">
                                <label for="phone">
                                    <h4>Phone</h4>
                                </label>
                                <input type="number" class="form-control" name="phone" value="{{$cus->phone}}"
                                    placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6 col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" value="{{$cus->email}}"
                                    placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-md-6 col-xs-6">
                                <label for="address">
                                    <h4>Address</h4>
                                </label>
                                <input type="text" class="form-control" name="address" value="{{$cus->address}}"
                                    placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-xs-6">
                                <label for="userName">
                                    <h4>User Name</h4>
                                </label>
                                <input type="text" class="form-control" name="userName" placeholder="abc123"
                                    value="{{$cus->userName}}" title="enter your area zip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-xs-6">
                                <label for="password">
                                    <h4>Password</h4>
                                </label>
                                <input type="password" class="form-control" name="password" value="{{$cus->name}}"
                                    placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                    Reset</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>

            </div>
        </div>
</div>

        @endsection
