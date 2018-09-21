<!DOCTYPE html>
<html>
<title>OCRS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <img src="https://logos.co/1024/royalty-free-vector-of-a-logo-of-a-police-officer-in-a-badge-by-patrimonio-5787.jpg" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome, <strong><?=$user->Name?></strong></span><br>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
            <p onclick="location.href='localhost/ocrs'" class="w3-bar-item w3-button"><i class="fa fa-power-off"></i></p>
        </div>
    </div>
    <hr>
    <div class="w3-container">
        <h5>Dashboard</h5>
    </div>
    <!--  <div class="w3-bar-block">-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Geo</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>-->
    <!--    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>-->
    <!--  </div>-->
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-red w3-padding-16">
                <div class="w3-left"><i class="fa fa-fire w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3><?=$l?></h3>
                </div>
                <div class="w3-clear"></div>
                <h4>High Priority</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-yellow w3-padding-16">
                <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3><?=$m?></h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Medium Priority</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-green  w3-padding-16">
                <div class="w3-left"><i class="fa fa-fire-extinguisher w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3><?=$h?></h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Low Priority</h4>
            </div>
        </div>
    </div>
</div>

<div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third">
            <h5>Region</h5>
            <div><div class="gmap_canvas"><iframe width="820" height="380" id="gmap_canvas" src="https://maps.google.com/maps?q=vit%20vellore&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="#"></a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>      </div>
        <div class="w3-twothird">
            <h5>Cases</h5>
            <table class="w3-table w3-striped w3-white">
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Guardian</b></td>
                    <td><b>Address</b></td>
                    <td><b>Occupation</b></td>
                    <td><b>email</b></td>
                    <td><b>phone</b></td>
                    <td><b>DOB</b></td>
                    <td><b>Nation</b></td>
                    <td><b>Aadhar</b></td>
                    <td><b>Passport</b></td>
                    <td><b>DL</b></td>
                    <td><b>Location</b></td>
                    <td><b>Crime_Type</b></td>
                    <td><b>Station</b></td>
                    <td><b>Severity</b></td>
                    <td><b>Officer</b></td>
                </tr>
                <?php
                foreach ($cases as $row) {
                    ?>
                    <tr>
                        <?php echo "<td>".$row['name'].".</td>"; ?>
                        <?php echo "<td>".$row['guardian'].".</td>"; ?>
                        <?php echo "<td>".$row['address'].".</td>"; ?>
                        <?php echo "<td>".$row['occupation'].".</td>"; ?>
                        <?php echo "<td>".$row['email'].".</td>"; ?>
                        <?php echo "<td>".$row['phone'].".</td>"; ?>
                        <?php echo "<td>".$row['dob'].".</td>"; ?>
                        <?php echo "<td>".$row['nation'].".</td>"; ?>
                        <?php echo "<td>".$row['aadhar'].".</td>"; ?>
                        <?php echo "<td>".$row['passport'].".</td>"; ?>
                        <?php echo "<td>".$row['dl'].".</td>"; ?>
                        <?php echo "<td>".$row['location'].".</td>"; ?>
                        <?php echo "<td>".$row['crime_type'].".</td>"; ?>
                        <?php echo "<td>".$row['severity'].".</td>"; ?>
                        <?php echo "<td>".$row['officer'].".</td>"; ?>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<hr>

<!-- Footer -->
<footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>OCRS</p>
</footer>

<!-- End page content -->
</div>

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
</script>

</body>
</html>
