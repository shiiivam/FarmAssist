<?php 



?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="1style.css" rel="stylesheet">
<title>FarmAssistBuy/Sell </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Bad+Script|Dancing+Script|Galada|Great+Vibes|Kaushan+Script|Lobster|Merienda|Parisienne|Playball|Tangerine&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
<style>
  .st:hover {
    box-shadow: 0 0 11px rgba(33,33,33,.5); 
  }
  * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
</head>
<body >
<header>
<div class="clr">
<nav class="navbar navbar-expand-lg navbar-light  " style="background-color: 	#FFFF00	;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:100%;">
<a class="navbar-brand" href="mainhome.php"><img src="falogo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="tutorial.php" ><button class="button" style="margin-left:100px;background-color:yellow;color:brown;width:200px;height:50px;"><span>FARMING TUTORIAL'S</span></button></span>
</button>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="buyfarm.php" ><button class="button" style="background-color:yellow;color:brown;width:200px;height:50px;"><span>BUY PRODUCTS</span></button></span>
</button>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="farmform.php" ><button class="button" style="background-color:yellow;color:brown;width:200px;height:50px;"><span>SELL PRODUCTS</span></button></span>
</button>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="weather.php" ><button class="button" style="background-color:yellow;color:brown;width:200px;height:50px;"><span>WEATHER REPORTS</span></button></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">

<li class="nav-item">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"  onMouseOver="this.style.color='#1FF026'"
onMouseOut="this.style.color='#964B00'"><i class='fas' onMouseOver="this.style.color='#1FF026'"
onMouseOut="this.style.color='#964B00'">&#xf007; </i></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="farmform.php"> Login</a>
<a class="dropdown-item" href="farmform.php">Sign-Up</a>
</div>
</li>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="mainhome.php" ><button class="button" style="background-color:green;color:white;width:200px;height:50px;"><span>HOME</span></button></a></span>
</button>


</ul>

</div>
</nav>
</div>
</header>
<section >
<h4 class="animated bounceInRight text-center" style="font-family: 'Libre Baskerville', serif;margin-top:20px;color:brown;"> Farming Tutorials</h4>
<hr class=" mx-auto w-25 animated zoomIn" style="border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
<p style="font-family: 'Merienda';" class="animated zoomIn">  </p> 




<div class="container-fluid">
  <div class="row">
  <a href="soilhealth.php" style="
    text-decoration: none;"><div class="col-sm-1" ><div class="st" style="cursor:pointer;height:425px;width:450px;background-color:#FFFF66;margin-left:45px;">
<div style="height:5px;width:100%;background:purple;"></div>
 <div style="height:300px;width:100%;">
 <img src="t.jpg" style="margin-right:5px;" height="100%" width="100%">

</div>
<div style="margin-left:10px;margin-top:10px;">
<h2 style="font-size:25px;font-family:Verdana, Geneva, sans-serif;color:black;"> Soil Health</h1>
<p style="font-family:Verdana, Geneva, sans-serif;font-size:17px;color:black;">Soils Introduction, 
On Farm Soil Health Assessment Lesson</p>
</div>
</div></div>
</a>
<a href="" style="
    text-decoration: none;"> <div class="col-sm-2" style="margin-left:px;" ><div class="st" style="cursor:pointer;height:425px;width:450px;background-color:#FFFF66;">
<div style="height:5px;width:100%;background:#72bcd4;"></div>
  <div style="height:300px;width:100%;">
  <img src="te.jpg" height="100%" width="100%">
  <div style="margin-left:10px;margin-top:10px;">
<h2 style="font-size:25px;font-family:Verdana, Geneva, sans-serif;color:black;"> Farm Energy Efficiency</h1>
<p style="font-family:Verdana, Geneva, sans-serif;font-size:17px;color:black;">Farm Building Efficiency, 
Irrigation Efficiency</p>
</div>

</div>
</div></div></a>
<a href="prot.php" style="
    text-decoration: none;">
<div class="col-sm-3" style="margin-left:px;" ><div class="st" style="cursor:pointer;height:425px;width:450px;background-color:#FFFF66;">
<div style="height:5px;width:100%;background:#728bd4;"></div>
  <div style="height:300px;width:100%;">
  <img src="tg.jpg" height="100%" width="100%">
  <div style="margin-left:10px;margin-top:10px;">
<h2 style="font-size:25px;font-family:Verdana, Geneva, sans-serif;color:black;"> Managed Grazing</h1>
<p style="font-family:Verdana, Geneva, sans-serif;font-size:17px;color:black;">Introduction to Managed Grazing, Fertility: Building Healthy Pasture Soils</p>
</div>

</div>
</div></div>
  </div>
  </a>
  </div>
</div>












<footer class="abt container-fluid" style="color:green; margin-top:50px;">
<div class="row">
<div class="col-lg-2 col-12 ">
<center><h6 style="font-family: 'Libre Baskerville', serif;color:brown;padding-top:10px;">About</h6></center>
<ul style="list-style-type:none;font-family: 'Libre Baskerville', serif;padding-top:10px;font-size: 14px;">
<li style="padding-left:30px;"> Contact Us </li>
<li style="padding-left:30px;"> About Us </li>
</ul>
</div>
<div class="col-lg-2 col-12 ">
<center><h6 style="font-family: 'Libre Baskerville', serif;color:brown;padding-top:10px;">Help</h6></center>
<ul style="list-style-type:none;font-family: 'Libre Baskerville', serif;padding-top:10px;font-size: 14px;">
<li style="padding-left:30px;"> FAQ</li>
<li style="padding-left:30px;"> Cancellation </li>
</ul>
</div>
<div class="col-lg-2 col-12 ">
<center><h6 style="font-family: 'Libre Baskerville', serif;color:brown;padding-top:10px;">Policy </h6></center>
<ul style="list-style-type:none;font-family: 'Libre Baskerville', serif;padding-top:10px;font-size: 14px;">
<li style="padding-left:30px;"> Terms & Conditions </li>
<li style="padding-left:30px;"> Privacy Policy</li>
</ul>
</div>
<div class="col-lg-2 col-12 ">
<center><h6 style="font-family: 'Libre Baskerville', serif;color:brown;padding-top:10px;">Social</h6></center>
<ul style="list-style-type:none;font-family: 'Libre Baskerville', serif;padding-top:10px;font-size: 14px;">
<li style="padding-left:30px;"> Facebook  </li>
<li style="padding-left:30px;"> Instagram </li>
<li style="padding-left:30px;"> Twitter </li>
</ul>
</div>
<div class="col-lg-2 col-12 ">
<center><h6 style="font-family: 'Libre Baskerville', serif;color:brown;padding-top:10px;">Mail Us</h6></center>
<ul style="list-style-type:none;font-family: 'Libre Baskerville', serif;padding-top:10px;font-size: 14px;">
<li style="padding-left:30px;"> farmassist@google.com</li>
</ul>
</div>
<div class="col-lg-2 col-12 ">
<center><h6 style="font-family: 'Libre Baskerville', serif;color:white;padding-top:10px;font-family: 'Libre Baskerville', serif;color:brown;padding-top:5px;">Registered Address</h6></center>
<ul style="list-style-type:none;font-family: 'Libre Baskerville', serif;padding-top:10px;font-size: 14px;">
<li style="padding-left:30px;"> Sharda University, Knowledge Park 3  </li>
<li style="padding-left:30px;"> Pari Chowk, Greater Noida </li>
<li style="padding-left:30px;"> 201310</li>
<li style="padding-left:30px;"> Uttar Pardesh </li>
</ul>
</div>
</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>