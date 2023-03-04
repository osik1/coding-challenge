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
    <title>Login</title>
</head>
<body>
   <div class="page-wrapper">
    <div class="signup-page">
        <div class="logo-box">
            <img src="{{ asset('assets/materials/e-ADAPP-logo-23.png')}}" class="form-logo" alt="">
        </div>
        <form action="register.php" method="post">
            <h1 class="form-header">Login</h1>

            <input type="hidden" name="id" value ="">
          
           <div>
              <label for="">Email</label>
              <input type="email" name="email"  value ="" class="text-input" placeholder="Email or username">
          </div>
          <div>
              <label for="">Passw</label>
              <input type="password" name="password"  value ="" class="text-input" placeholder="Password">
          </div>
          <br>
          <div class="Remember">
            <div class="r-me">
                <input type="checkbox" name="remember-me "><span> Remember me</span> 
            </div>
            <div class="f-passw">
                <a href="" class="forgot-pass">Forgot password</a>
            </div> 
          </div> 
          <br>  
          <div>
              <button type="submit" name="register-btn" class="btn btn-big">Login</button>
          </div>
          <br>
          <p>Don't have an account? <a href="{{ url('signup')}}">Sign up</a></p>
          <br>
          <div class="social-header">
            <div class="line1">
                <hr size="2" width="90%" color="black">
            </div>
            <div class="head">
                <h4>Or continue with</h4>
            </div>
            <div class="line2">
                <hr size="2" width="90%" color="black">
            </div>
          </div>
          <div class="social-login">
            <div class="social-links">
                <div class="google">
                    <a href="  "><img src="assets/materials/search.png" alt=""></a>
                </div>
                <div class="facebook">
                    <a href="  "><img src="assets/materials/facebook.png" alt=""></a>
                </div>
                <div class="twitter">
                    <a href="  "><img src="assets/materials/twitter.png" alt=""></a>
                </div>
            </div>
          </div>
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