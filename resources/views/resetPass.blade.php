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
    <title>Reset Password</title>
</head>
<body>
   <div class="page-wrapper">
    <div class="signup-page">
        <div class="logo-box">
            <img src="{{ asset('assets/materials/e-ADAPP-logo-23.png')}}" class="form-logo" alt="">
        </div>
        <form action="{{ route('password.update') }}" method="POST">
        @csrf
            <h1 class="form-header">Reset Password</h1>
              <!-- //alert message  -->
                <!-- //alert message  -->
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                    </div>
                @endif
              <input type="hidden" name="token" value="{{ $token }}">
          
           <div>
              <label for="">Email</label>
              <input type="email" name="email"  value ="" class="text-input" placeholder="Email or username">
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
          </div>
          <div>
              <label for="">Passw</label>
              <input type="password" name="password"  value ="" class="text-input" placeholder="Password">
              @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
          </div>
          <div>
              <label for="">Passw</label>
              <input type="password" name="password_confirmation"  value ="" class="text-input" placeholder="Confirm Password">
              @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
              @endif
          </div>
          <br>  
          <div>
              <button type="submit" name="register-btn" class="btn btn-big">Reset</button>
          </div>
        </form>
    
    </div>

    <div class="image-banner">
        <img src="{{ asset('assets/materials/farmer.png')}}" class="signup-banner" alt="">
    </div>
   </div> 
</body>
</html>