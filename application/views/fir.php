<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
  <meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<style>
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>
Online Crime Reporting System
</title>
<link rel="stylesheet" href="form.css" />
</head>
<body>
<nav class="#212121 grey darken-4">
			<div class="nav-container">
				<div class="nav-wrapper ">
					<a href="index.html" class="brand-logo" ><img height="62px" width="80px" src="http://is4.mzstatic.com/image/thumb/Music62/v4/9f/23/5f/9f235f94-6701-f746-ee6c-5338e33a15b0/source/1200x630bb.jpg" height="100"></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="index.html">Home</a></li>												
						<li><a class="modal-trigger" href="#csmodal">Check Status</a></li>												
						<li><a href=#>About</a></li>
						<li><a href=#>Contact us</a></li>
					</ul>
				</div>
			</div>
		</nav>
<h2 style="font-family:Forte;color:white" class="center-align">Online Crime Reporting System</h2>

<!--loginmodal-->
<div id="loginmodal" class="modal">
		<div class="modal-content">
				<center>
			<h4>Complainant Login</h4>
			<form class="form" method="post" action="">
				<div class="content">
					<div class="container">
					<div class="input-group">
						<span class="input-group-addon">
					<i class="material-icons">face</i>
					</span>
						<input type="text" class="form-control" placeholder="                  UserName...">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
			<i class="material-icons">security</i>
		</span>
						<input type="password" class="form-control" placeholder="                  Password...">
					</div>
				</div>
			</div>
				<div class="footer">
<!--					<button type="button" class="btn red" data-dismiss="modal">Cancel</button>-->
					<button type="submit" class="btn green">Submit</button>
				</div>
			</center>
			</form>
		
		</div>
	</div>


	<div id="form" >
<form action="<?=base_url()?>index.php/FIR/submit_fir" method="post">
  <div class="container1">
  <ul class="collapsible popout " data-collapsible="accordion">
    <li>
<div class="collapsible-header hoverable"><h3 style="font-size:38px;font-family:Old English Text MT;"> complainant/witness information</h3></div>
<div class="collapsible-body container2">
<div class="row">
  <div class="col s5">
<b>Name:</b><br>
<i class=" material-icons">account_box</i>
<input class="fo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Name" size="20" maxlength="25" name="name" required />
</div>
<div class="col s5 offset-s2 ">
<b>Father's/Husband's Name:</b>
<br>
<i class=" material-icons">portrait</i>
<input class="do" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter Father's or husband's Name" size="25" maxlength="25" name="father_name" required/>
</div>
</div>
<div class="row">
  <div class="col s5">
<b>Address:</b>
<br>
<i class="material-icons">home</i>
<input class="so" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Address" size="50" maxlength="40" name="add" required />
</div>
<div class="col s5 offset-s2">
<b>Occupation:</b>
<br>
<i class=" material-icons">business_center</i>
<input class="ao" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your occupation" size="20" maxlength="20" name="occupation" required/>
</div>
</div>
<div class="row">
  <div class="col s5">
<b>Email ID:</b>
<br>
<i class=" material-icons">email</i>
<input class="po" id="bla" onclick="myFunction(this.className)" type="email" required placeholder="Enter your Email ID" size="55" maxlength="35" name="email" />
</div>
<div class="col s5 offset-s2">
<b>Contact No:</b>
<br>
<i class=" material-icons">local_phone</i>
<input class="oo" id="bla" onclick="myFunction(this.className)" type="tel" placeholder="Enter your contact no." size="15" maxlength="10" name="contact" required />
</div>
</div>
<div class="row">
  <div class ="col s5">
<b>DOB:</b>
<br>
<i class=" material-icons">cake</i>
<input class="io" id="bla" onclick="myFunction(this.className)" type="date" name="dob" required />
</div>
<div class="col s5 offset-s2">
<b>Nationality:</b>
<br>
<i class=" material-icons">person</i>
<input class="uo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Nationality" size="15" maxlength="10" name="nation" required />
</div>
</div>
<br/>
<br/>
</div>
</li>
<li>
  <div class="collapsible-header hoverable">
<h3 style="font-size:38px;font-family:Old English Text MT">multiple id proof</h3>
</div>
<div class="collapsible-body container2">
<div class="row">
  <div class="col s9">
<b>Aadhar number:</b>
<br>
<i class="material-icons">contact_mail</i>
<input class="yo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Aadhar No." size="15" maxlength="12" name="Aadhar" required />
</div>
<br>
<div class="col s9">
<b>Passport number:</b>
<br>
<i class="material-icons">contact_mail</i>
<input class="to" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Passport No." size="35" maxlength="8" name="pass" required/>
</div>
<br>
<div class="col s9">
<b>Driving Licence number:</b>
<br>
<i class="material-icons">contact_mail</i>
<input class="ro" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Driving Licence number" size="40" maxlength="13" name="dl" required/>
</div>
</div>
<br/><br>
</div>
</li>
<li>
  <div class="collapsible-header hoverable">
<h3 style="font-size:38px;font-family:Old English Text MT"> type of crime </h3>
</div>
<div class="collapsible-body container2">
<div class="row">
  <div class="col s5">
<b>Enter the type of Crime:</b>
</div>
<div class="offset-s2 col s5">
<i class="material-icons">report</i>
<input type='text' name="c_type" placeholder="Please enter the type of crime">
</div>
</div>
<br/><br>
</div>
</li>
      <li>
          <div class="collapsible-header hoverable">
              <h3 style="font-size:38px;font-family:Old English Text MT"> Severity </h3>
          </div>
          <div class="collapsible-body container2">
              <div class="row">
                  <div class="col s5">
                      <b>How severe do you think the crime is? (High, Medium or Low)</b>
                  </div>
                  <div class="offset-s2 col s5">
                      <i class="material-icons">report</i>
                      <input type='text' name="severity" placeholder="Severity">
                  </div>
              </div>
              <br/><br>
          </div>
      </li>
<li>
  <div class="collapsible-header hoverable">
<h3 style="font-size:38px;font-family:Old English Text MT">place of occurrence</h3>
</div>
<div class="collapsible-body container2">
<div class="row">
  <div class="col s5">
<b>Location:</b>
<br>
<i class="material-icons">location_on</i>
<input class="wo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter the Address of occurrence of Crime" size="50" maxlength="40" name="location" required />
</div>
<div class="col s5 offset-s2">
<b>Nearest Police Station:<b>
<br>
<i class="material-icons">store</i>
<input class="qo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter nearest Police Station" size="20" maxlength="20" name="ps" required />
</div>
</div>
</div>
<br/>
</ul>
</div>
<center><button id="submit" type="submit" value="Submit" name="submit" >Submit<i id="sub" class="material-icons right">send</i></button></center>
    <br>
</form>
</div>
		<div id="modal1" class="modal">
			<div class="modal-content">
			<h4>Straw Hat Developers</h4>
			<ul style="text-align: justify">
				<li>Ashutosh Mahesh Pednekar 		-		15BCE0897</li>
				<li>Shivam Gupta 		-		15BCE2012</li>
			</ul>
		</div>
		</div>
		<div id="modal3" class="modal">
			<div class="modal-content #212121 grey darken-4">
				<h4 style="color:whitesmoke;">Straw Hat Developers</h4>
				<img style="height:60%;width:100%;" src="https://philipjlin.files.wordpress.com/2014/09/191.jpg">
			</div>
		</div>
		<div id="modal2" class="modal">
			<div class="modal-content ">
				<h4>Contact Us</h4>
				<ul>
					<li><b>Ashutosh</b><p>			Email: ashupednekar49@gmail.com</p></li>
					<li><b>Shivam</b><p>			Email: shivamthedude5@gmail.com</p></li>
				</ul>
			</div>
		</div>

<footer class="page-footer #212121 grey darken-4">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">OCRS</h5>
						<p class="grey-text text-lighten-4">A one stop solution for all your grievances</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Quick Access</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">New FIR report</a></li>
							<li><a class="grey-text text-lighten-3 modal-trigger" href="#modal3">Check Status</a></li>
							<li><a class="grey-text text-lighten-3 modal-trigger" href="#modal3">Report Eyewitness</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright black">
				<div class="container">
					© OCRS Project
					<a class="grey-text text-lighten-4" style="float:right;padding-right: 215px" href="#!">About us</a>
				</div>
			</div>
		</footer>
<script>
	document.ready(function () {
		$('.modal').modal();
	});

function myFunction(x) {
	console.log(x);
    var a = document.getElementsByClassName(x);
    document.createAttribute("id");
    for (var i = 0; i < a.length; i++){
    if((a[0].className == x) &&(a[0].id == "bla"))
    {
		a[0].setAttribute("id","bla1");
    }
    else{
    	a[0].setAttribute("id","bla");
    }
    }
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
</script>
<script>
$(document).ready(function(){
  $('.collapsible').collapsible('open', 0);
	$('.modal').modal();
});
</script>

</body>
</html>

<!--



<select id="bla" name="crime">
<option selected>Type of Crime </option>
<option>Theft</option>
<option>Murder</option>
<option>Kidnapping</option>
<option>Drink & Drive</option>
<option>Fraud</option>
<option>Sexual Harrassment</option>
<option>Drugs Paddling</option>
<option>Others</option>
</select>



<!DOCTYPE html>
<html>
<head>
<style>
.democlass {
    color: red;
    transition:400;
}
.sumoclass {
color: black;
    transition:400;
}
</style>
</head>
<body>

<h1 class="a" onclick="myFunction(this.className)">Hello World</h1>
<h1 class="b" onclick="myFunction(this.className)"> Pinki </h1>

<p>Click the button to create a "class" attribute with the value "democlass" and insert it to the H1 element above.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction(c) {
    var h1 = document.getElementsByClassName(c);
    var att = document.createAttribute("class");
    //att.value = "democlass";

    if(att.value=="democlass")
    {
    	att.value = "sumoclass";
    }
    else{
    	att.value = "democlass";
    }
    h1.setAttributeNode(att);
}
</script>

</body>
</html>


console.log(ar[0].style.borderColor);
for (var i = 0; i <= ar.length; i++){
if (ar[0].style.borderColor == "black"){
  ar[0].style.borderColor = "white;"
  console.log(ar[0].style.borderColor);
}
else {
ar[0].style.borderColor = "black";
}
}
-->
