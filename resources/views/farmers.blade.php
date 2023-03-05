<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--custom styling-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <!-- // responsive notice // -->
    <script language="Javascript">
    window.onload=function(){
    var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
    if (mobile) {
         var alerted = localStorage.getItem('alerted') || '';
        if (alerted != 'yes') {
         alert("Visit this on a Computer for Better View");
         localStorage.setItem('alerted','yes');

    } else {

    }}}
    </script>
    <title>Farmer's Panel</title>
</head>
<body>
   <!-- // header // -->
   @include('header')
 
   <div class="dashboard-wrapper">
    <!-- // Side bar // -->
   @include('sidebar')

    <div class="dashboard-content">
        <div class="header-box">
            <div class="icon">
                <img src="assets/materials/agenda.png" alt="">
            </div>
            <div class="heading">
                <p class="title">Farmers' Panel</p>
                <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="form-wrapper">
            <h2>Personal details</h2>
            <ul class="navigation">
                <li><a href="">Item one</a></li>
                <li><a href="">Item two</a></li>
                <li><a href="">Item three</a></li>
                <li><a href="">Item four</a></li>
                <li><a href="">Item five</a></li>
            </ul>
            <br>
            <div class="form-box">
               <form action="farmers.php" method="post">
                     <form>
                    <div class="profile-edit">
                      <div class="profile-box">
                        <img src="assets/materials/bored-6945309_1920.png" alt="">
                      </div>
                      <br>
                      <div class="uploads">
                        <div class="capture">
                            <a href=""><img src="assets/materials/dslr-camera.png" alt=""></a>
                            <p>Take a photo</p>
                        </div>
                        <div class="upload">
                            <a href=""><img src="assets/materials/cloud-computing.png" alt=""></a>
                            <p>upload photo</p>
                        </div>
                      </div>
                      <br>
                      <div class="radio">
                        <label for="">Gender</label>
                        <div class="radios">
                            <input type="radio" > <p>Male</p>
                           &nbsp;
                           &nbsp;
                            <input type="radio"> <p>Female</p> 
                        </div>
                    
                      </div>
                    </div>
                    </form>
                    <div class="form-one">
                        <div>
                            <label for="">Name</label>
                            <input type="text" name="name"  value ="" class="text-input">
                        </div>
                        <div>
                            <label for="">Birth place</label>
                            <input type="text" name="birth-place"  value ="" class="text-input">
                        </div>
                        <div>
                            <label for="">House Number</label>
                            <input type="text" name="hs-no"  value ="" class="text-input">
                        </div>
                        <div>
                            <label for="">Occupation</label>
                            <input type="text" name="occupation"  value ="" class="text-input">
                        </div>
                        <div>
                            <label for="">Region</label>
                            <input type="text" name="region"  value ="" class="text-input">
                        </div>
                    </div>
                    <div class="form-two">
                        <div>
                            <label for="">Last Name</label>
                            <input type="text" name="last-name"  value ="" class="text-input">
                        </div>
                        <div>
                            <label for="">Date of Birth</label>
                            <input type="text" name="date-of-birth"  value ="" class="text-input">
                        </div>
                        <div>
                            <label for="">Community</label>
                            <input type="text" name="community"  value ="" class="text-input">
                        </div>
                        <div>
                            <label for="">District</label>
                            <input type="text" name="district"  value ="" class="text-input">
                        </div>
                        <div>
                            <label for="">Marital Status</label>
                            <input type="text" name="m-status"  value ="" class="text-input">
                        </div>
                    </div>
                    <div class="form-three">
                        <div>
                            <label for="">Bio</label>
                            <textarea name="bio" id="" cols="30" rows="7" placeholder="Write a short introduction"></textarea>
                        </div>
                        <div class="buttons">
                            <button type="submit" name="reset-btn" class="btn">Reset</button>
                            <button type="submit" name="save-btn" class="btn save-btn">Save</button>

                        </div>

                    </div>
               </form>
            </div>

        </div>

    </div>

   </div> 
   <script type="text/javascript" src="{{ asset('assets/js/scripts.js')}}"></script>

</body>
</html>