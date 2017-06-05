
@extends('layouts.master')
@section('title')
Welcome In Snub
@endsection
@section('content')
    @if(count($errors)>0)
    <div class="row">
        <div class="col-md-6">
        <ul class="alert alert-danger">
       @foreach($errors-> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
    </div>
    @endif

<div class="container-fluid">
   <div class="a">
       <center>Make your business faster with us!!</center>
   </div>
</div>
    <div class="container-fluid b">
            <center>Welcome to Snub.Inc</center>
    </div>
    <div class="c">
    <center> It's easy to find a work according to your talent or find someone who can work for you!!!<br>
     You need a platform to fill your requirement.
     We Snub.Inc promise you to fill your requirement.</center>
    </div>
    
    <div class="container-fluid d">
    <hr class="g">
      <center><div class="row">
      <div class="col-md-4">
         <h2> Stay with us !! </h2>
      </div>
      <div class="col-md-4">
      <h2> Earn with us !!</h2>
      </div>
      <div class="col-md-4">
          <h2> Grow with us !!</h2>
      </div>
    </div></center>
    <hr class="i">
    </div>

    <div class="container-fluid">
       <div class="well-sm a1">
           <center>Join us to make your part-time income.</center>
       </div>
    </div>
    <div class="container-fluid f">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-4">
            <form class="form-horizontal" action="{{'signup'}}" method="post"><legend class="e">Create Your Free account here :)</legend>
                <div class="form-group e">
                    {{ csrf_field() }}
                    <label for="Name">Full Name*</label>
                    <input id="full_name" name="fname" type="text" role="form" class="form-control" required="required">
                </div>

                <div class="form-group e">
                    <label for="email">Email*</label>
                    <input id="email" name="email" type="email" role="form" class="form-control" required="required">
                </div>

                <div class="form-group e">
                    <label for="password">Password*</label>
                    <input id="password" name="password" type="password" role="form" class="form-control" required="required">
                </div>

                <div class="form-group e">
                    <label for="Confirm_Password">Confirm Password*</label>
                    <input id="c_pass" name="c_pass" type="password" role="form" class="form-control" required="required">
                </div>

                <div class="form-group e">
                    <label for="reqd">Required (Hire/Job)*</label>
                    <input id="reqd" name="reqd" type="text" role="form" class="form-control" required="required">
                </div>

                <center><div class="form-group">
                    <button class="btn btn-primary" type="submit">Register</button>
                    </div></center>
                <p class="e">* field is neccessary to fill.</p>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <legend class="e">Sign In here :)</legend>
            <form class="form-horizontal" action="{{'signin'}}" method="post">
         {{ csrf_field() }}
                <div class="form-group e">
                    <label for="email">Email*</label>
                    <input id="email" name="email" type="email" role="form" class="form-control" required="required">
                </div>

                <div class="form-group e">
                    <label for="Name">Password*</label>
                    <input id="password" name="password" type="password" role="form" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Sign In</button>
                </div>
                <p class="e">* field is neccessary to fill.</p>
            </form>
        </div>
    </div>
    </div>

                
           <center> <legend class="e"><h1>Terms & Condtions<h1></legend></center>
            
    <div class="container-fluid e">
        <center> All the processes will be take by Snub.Inc.<br><br>
                 All the payment will be done through paytm and paypal.<br><br>
                  In intial stage the 5% amount of total work will be give to the hired person.<br><br>
                 The amount of 5% will be give by the person who need to hire.<br><br>
                 All the work will be done by Snub.Inc.<br><br>
            The selection of person will be done by Snub.Inc.
                </center>
    </div>
        <hr>


    <div class="div">
        <div class=" h ">
            All the copyright of this website is reserved by Snub.Inc. No other illegal content used in this website.
        </div>
    </div>

<script>
    var password = document.getElementById("password")
        , confirm_password = document.getElementById("c_pass");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>


@endsection
