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
        <form action="register.php" method="post">
            <h1 class="form-header">Register</h1>

            <input type="hidden" name="id" value ="">
            <div>
               <label for="">Username</label>
               <input type="text" name="username" value ="" class="text-input" placeholder="Enter your username">
           </div>
           <div>
              <label for="">Email</label>
              <input type="email" name="email"  value ="" class="text-input" placeholder="Enter your email">
          </div>
          <div>
              <label for="">Passw</label>
              <input type="password" name="password"  value ="" class="text-input" placeholder="Enter your password">
          </div>
          <div>
              <label for="">Passw Confirm</label>
              <input type="password" name="passwordConf"  value ="" class="text-input" placeholder="Confirm your password">
          </div>
          <br>
          <div>
              <button type="submit" name="register-btn" class="btn btn-big">Register</button>
          </div>
          <br>
          <p>Have an account? <a href="{{ url('/')}}">Sign In</a></p>

        
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