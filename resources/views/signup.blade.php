<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--custom styling-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script language="Javascript">
        window.onload=function(){
        var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
        if (mobile) {
           var alerted = localStorage.getItem('alerted') || false;
          if (alerted !== true) {
           alert("Visit this on a Computer for Better View");
           localStorage.setItem('alerted', true);
         } else {
           
         }}}
    </script>
    <title>Sign Up</title>
</head>
<body>
   <div class="page-wrapper">
    <div class="signup-page">
        <div class="logo-box">
            <img src="{{ asset('assets/materials/e-ADAPP-logo-23.png')}}" class="form-logo" alt="">
        </div>
        <form action="{{ route('register.post') }}" method="post">
        @csrf
            <h1 class="form-header">Register</h1>

            <input type="hidden" name="id" value ="">
            <div>
               <label for="">Username</label>
               <input type="text" name="name" value ="" class="text-input" placeholder="Enter your username">
               @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
               @endif
           </div>
           <div>
              <label for="">Email</label>
              <input type="email" name="email"  value ="" class="text-input" placeholder="Enter your email">
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
          </div>
          <div>
              <label for="">Passw</label>
              <input type="password" name="password"  value ="" class="text-input" placeholder="Enter your password">
              @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
          </div>
          <div>
              <label for="">Passw Confirm</label>
              <input type="password" name="c_password"  value ="" class="text-input" placeholder="Confirm your password">
              @if ($errors->has('c_password'))
                <span class="text-danger">{{ $errors->first('c_password') }}</span>
              @endif
          </div>
          <br>
          <div>
              <button type="submit" name="register-btn" class="btn btn-big">Register</button>
          </div>
          <br>
          <p>Have an account? <a href="{{ url('login')}}">Sign In</a></p>

        
        </form>
        <div class="form-footer">
            <p>By clicking the button you agree to our <a href="">terms of us</a> and <a href="">privacy policy</a></p>
          </div>
    </div>

    <div class="image-banner">
        <img src="{{ asset('assets/materials/farmer.png')}}" class="signup-banner" alt="">
    </div>
   </div> 
</body>
</html>