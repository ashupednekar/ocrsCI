<!DOCTYPE html>
<html>
<title>Welcome, Complainant <?= $user->Name?></title>
<meta charset="TF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">OCRS</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="https://www.trybooking.com/media/3446/login-user-icon.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <br><strong><?=$user->Name?></strong></span>
      <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>-->
      <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>-->
      <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>-->
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="<?=base_url()?>/index.php/FIR/index" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus fa-fw"></i>  New Complaint</a>
    <a href="#" class="w3-bar-item w3-button active w3-padding" onclick="status()"><i class="fa fa-history fa-fw"></i>  Check Status</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div style="display:block" id="check-status">
  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> CASE PROGRESS</b></h5>
  </header>
  <div class="progress" style="margin: 0% 2.5% 0% 2.5%">
    <div class="progress-bar progress-bar-striped progress-bar-animated"  role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
  </div>
  <hr>
  <div class="w3-container">
    <br>
     <p>Case ID | 62252554</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">50%</div>
    </div>
    <br>
    <hr>
    <br>
    <b><h3>Detailed Report</h3></b>
    <div class="card">
          <p style="margin: 10%;">guhsuigfidsebrtnfb qkuthgbuo32hnrgukne</p>
    </div>
</div>
</div>
  <hr>



  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <p>OOSD <a href="#" target="_blank">Project</a></p>
  </footer>

  <!-- End page content -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}

function fir() {
    $('#check-status').css('display','none');
    $('#fir-body').css('display','block');
}

$(document).ready(function () {
   $('#fir-body').css('display','none');
});

function status() {
    $('#fir-body').css('display','none');
    $('#check-status').css('display','block');
}
</script>

</body>
</html>
