<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Online Crime Reporting System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('https://i.pinimg.com/originals/20/38/44/20384461984864dabb9b3899291158bd.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("https://callhub.io/wp-content/uploads/2016/05/sign-up-campaigns.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("http://s1.1zoom.me/b5050/332/Coffee_workgroup_461380_3840x2400.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button" style="color: white;"><i class="fa fa-home"></i> <b> HOME</b></a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small" style="color: white;"><i class="fa fa-file"></i><b>  MENU</b></a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small" style="color: white;"><i class="fa fa-envelope"></i><b>  CONTACT</b></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Online <span class="w3-hide-small">Crime Reporting</span> System</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-padding-64" id="about" style="margin:0px 150px 0px 150px">
 <form method="" action="POST">
   <h4><center>WELCOME</center></h4>
  <h2><center><b>Choose Account Type and Login</b></center></h3>
  <br><br><br>
  <div class="row">
    <div style="margin-left: 14%" class="col-md-3 col-3" onclick="window.location='<?= base_url()?>/index.php/Login/index'">
        <img src="https://www.trybooking.com/media/3446/login-user-icon.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333" value="Margharita">
      <p><b><center>Complainant</center></b></p><br>
    </div>
    <div class="col-md-3 col-3" href="/login" onclick="window.location='<?= base_url()?>/index.php/Login/index'">
        <img src="https://www.sifs.in/images/forensic.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
      <p><b><center>Forensics</center></b></p><br>
    </div>
    <div class="col-md-3 col-3" href="/login" onclick="window.location='<?= base_url()?>/index.php/Login/index'">
        <img src="https://st2.depositphotos.com/5266903/8410/v/950/depositphotos_84101762-stock-illustration-police-officer-icon.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
      <p><b><center>Officer</center></b></p><br>
    </div>
  </div>
  </form>
  <br><br><br>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge"> A rule isn't unfair if </span><br>
    it applies to everyone
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Laws catch flies  </span><br>
    but let hornets go free.
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Quarrels never could last long</span><br>
    if on one side only lay the wrong
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">The deceitful have</span><br>
    no friends
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide" id="sign-up">SIGN UP</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
</di class="w3-content w3-container w3-padding-64" id="portfolio"><br><br>
  <h3 class="w3-center">PLEASE FILL IN YOUR DETAILS</h3>
  <div style="margin:50px 50px 60px 50px ">
          <form method="post" action="<?= base_url()?>/index.php/Welcome/sign_up">
              <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="name" class="form-control" name="name" id="'name" aria-describedby="emailHelp" placeholder="What's your name?">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id='email' aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="'password" placeholder="Password">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Type</label>
                  <input type="password" class="form-control" name="type" id="'type" placeholder="Type">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <textarea type="password" class="form-control" name="address" os="address" placeholder="PLease enter your address"></textarea>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">phone</label>
                  <input type="password" class="form-control" name="phone" id="phone" placeholder="Your phone number please">
              </div>
    <center><input class="btn btn-outline-success" type="submit" value="Submit"/></center>
          </form>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"></span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">GROUP MEMBERS</h3>
  <p class="w3-center"><em>We'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m8 w3-panel">
      <center></center><div class="w3-margin-bottom" style="margin-left: 50%">
        <center><i class="fa fa-user w3-hover-text-black"></i> Ashutosh Mahesh Pednekar | 15BCE0897<br></center>
        <center><i class="fa fa-user w3-hover-text-black"></i> Shivam Gupta | 15BCE2012<br></center>
    </div></center>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>OOSD <a href="#" target="_blank" class="w3-hover-text-green"> Project</a></p>
</footer>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
