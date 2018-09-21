<!DOCTYPE html>
<html>
<title>FIR_SUCCESS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('https://cdn.vox-cdn.com/thumbor/ofjX038fUv0VOBoqi9HNVZo2xSI=/0x152:3000x1840/1600x900/cdn.vox-cdn.com/uploads/chorus_image/image/44362502/134227121.0.0.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
      <a href="http://127.0.0.1:8000" style="text-decoration: none">Home</a>
  </div>
  <div class="w3-display-middle">
    <center><h1 class="w3-jumbo w3-animate-top">Welcome <?= $case->name?></h1></center>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center"><center><h3>Your FIR has been successfully submitted.</h3></center></p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    OCRS <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Project</a>
  </div>
</div>

</body>
</html>
