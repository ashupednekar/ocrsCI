<!DOCTYPE html>
<html>
<title>Welcome, Complainant {{data.name}}</title>
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
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->

    <div class="w3-container" style="display: block; " id="fir-body  ">
    <h5>Create New Complaint</h5>
    <div class="w3-ul w3-card-4 w3-white">
      <div class="w3-padding-16">
        <b><h2>First Information Report</h2></b>
        <div style="margin: 2%">
          <form method="post">
            {% csrf_token %}
            {{ fir_form }}

        </div>
      </div>
      <div class="w3-padding-16">
          <center><input class="btn btn-outline-success" type="submit" value="Submit FIR request"/></center>
           </form>
      </div>
    </div>
  </div>
  <hr>
<br>
</body>
</html>