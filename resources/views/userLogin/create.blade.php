<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}users/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <title>Login</title>
</head>
<body style="background-color:#D3EDE2">
    <div class="section-login">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center login-htxt">
                <h3>Login</h3>
                <h5>Welcome back, Login to get started</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 ">
                <div class="login">
                    <div class="col-md-10 col-md-offset-1">
                    <!-- <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix"> -->
                        <i class="fa fa-sign-in dialog-icon"></i>
                            <form class="login-form" action = "" method="post">
                                @csrf
                                <!-- <div class="form-group">
                                    <label>Login Type</label>
                                    <select id="type">
                                        <option value="admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name ="userName" placeholder="username" class="form-control" value="{{session('olduserName')}}">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password" class="form-control" value="{{old('password')}}">
                                </div>
                                @if(session('msg')=='false')
                                <p style="color:red;">username or password not matched</p>
                                @endif
                                
                                <input type="submit" value="Sign in" class="btn btn-primary"><br><br>
                                <p style="color:red;">Donot have any account? <button><a href="{{route('register.create')}}">Sign Up</a></button></p> 

                                @if($errors->any())
                            <h4 style="color:red">Errors</h4>
                            <ul style="color:red">
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                            </ul>
                            @endif
                            </form>
                    
                    <!-- </div>   -->
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>