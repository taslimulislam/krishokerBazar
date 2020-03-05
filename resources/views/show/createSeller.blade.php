@extends('layout.main')
@section('content')
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 form-seller">
            <h2>Welcome to become a seller!</h2><br><br><br>
            <form action="" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">
                        <h4>Name</h4>
                    </label>
                    <input type="text" class="form-control" name="name" value="{{$customer->name}}"
                        placeholder="enter name" title="enter your pname.">
                </div>
                <br>
                <div class="form-group">
                    <label for="phone">
                        <h4>Phone</h4>
                    </label>
                    <input type="number" class="form-control" name="phone" value="{{$customer->phone}}"
                        placeholder="enter phone" title="enter your phone number if any.">
                </div>
                <br>
                <div class="form-group">
                    <label for="email">
                        <h4>Email</h4>
                    </label>
                    <input type="text" class="form-control" name="email" value="{{$customer->email}}"
                        placeholder="enter Email" title="enter your email if any.">
                </div>
                <br>
                <div class="form-group">
                    <label for="address">
                        <h4>Address</h4>
                    </label>
                    <input type="text" class="form-control" name="address" value="{{$customer->address}}"
                        placeholder="enter address" title="enter your Address if any.">
                </div>
                <br>
                <button class="btn btn-lg btn-success" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<br> <br> <br>
@endsection
