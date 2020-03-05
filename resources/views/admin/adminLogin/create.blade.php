<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Admin Login</title>
</head>
<br><br><br>
<body  stype="background:#D3EDE2">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-8 admin-logreg ">
                <div id="login " >
                    <i class="fa fa-sign-in dialog-icon"></i>
                    <h3>Admin Login</h3>
                    <h5>Welcome back, Login to get started</h5>
                    <br><br>
                    
                        <form class="dialog-form" action = "" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Uasrname</label>
                                <input type="text" name ="userName" placeholder="e.g: Mahibul Islam" class="form-control" value="{{session('olduserName')}}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="********" class="form-control" value="{{old('password')}}">
                            </div>
                            @if(session('msg')=='false')
                            <p style="color:red;">username or password not matched</p>
                            @endif
                            
                            <input type="submit" value="Sign in" class="btn btn-primary"> or <button  class="btn btn-success "><a style="color:#fff" href="{{Route('index')}}" >Homepage</a></button>
                            <br>
                            <br>
                            <a href="{{Route('adminRegister.create')}}" >Don't have any account? </a> or
                            

                        </form>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>