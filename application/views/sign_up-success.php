<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('https://koloritplus.ru/wp-content/themes/Louis/images/header.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    OCRS
  </div>
  <div class="w3-display-middle">
    <center><h1 class="w3-jumbo w3-animate-top">Welcome <?=$name?></h1></center>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center"><a href="index" style="text-decoration: none; color:darkred">Proceed to Login</a></p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    OOSD <a href="#" target="_blank">Project</a>
  </div>
</div>

</body>
</html>