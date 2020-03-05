<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Admin Registretion</title>
</head>
<br><br>
<body>
    <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-8 logreg">
                <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-edit dialog-icon">
            <h3>Admin Registration</h3>
            <h5>Ready to get best offers? Let's get started!</h5>

                <br><br><br>
                <form class="dialog-form" action = "" method="post">
                     @csrf
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" placeholder="e.g: Taslimul Islam" name="userName" class="form-control" value="{{old('userName')}}">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="e.g: 015********" name="phone" class="form-control" value="{{old('phone')}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" placeholder="example@gmail.com" name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="********" name="password" class="form-control" value="{{old('password')}}">
                    </div>
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <input type="password" placeholder="Type your password again" name="confirmPassword" class="form-control" >
                    </div>
                    
                    
                    <input type="submit" value="Sign up" class="btn btn-primary">
                    <br>
                    <br>
                    <a  href="{{Route('adminLogin.create')}}" >Already member</a>
                    <br>
                    <br>
                    @if($errors->any())
                        <h4 style="color:red">Errors</h4>
                        <ul style="color:red">
                        @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                        </ul>
                    @endif

                   
                </form>

           
                
                
            
        </div>

                </div>
        </div>  
    </div>

    
</body>
</html>