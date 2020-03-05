<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}users/css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Registration</title>
</head>
<body style="background-color:#D3EDE2">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div id="register-form">
                    <div class="register-htxt">
                        <i class="fa fa-edit dialog-icon"></i>
                        <h3>Registration</h3>
                        <h5>Ready to get best offers? Let's get started!</h5>
                    </div>


                    <div class="col-md-12 reg-form">
                        <form class="dialog-form" action = "" method="post">
                            @csrf
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" placeholder="Your Username" name="userName" class="form-control" value="{{old('userName')}}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" placeholder="Your address" name="address" class="form-control" value="{{old('address')}}">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" placeholder="Your phone number" name="phone" class="form-control" value="{{old('phone')}}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" placeholder="My secret password" name="password" class="form-control" value="{{old('password')}}">
                            </div>
                            <div class="form-group">
                                <label>Repeat Password</label>
                                <input type="password" placeholder="Type your password again" name="confirmPassword" class="form-control" >
                            </div>
                            
                            
                            <input type="submit" value="Sign up" class="btn btn-primary">

                            @if($errors->any())
                        <h4 style="color:red">Errors</h4>
                        <ul style="color:red">
                        @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                        </ul>
                        @endif
                        </form><br>
                        <p style="color:red;">Donot have any account? <button><a href="{{route('login.create')}}">Sign In</a></button></p>
                    </div>
                   
                </div>
            </div>
        </div>  
    </div>
</body>
</html>