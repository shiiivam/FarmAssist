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
</style>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url('f2.jpg'); background-repeat: no-repeat;background-size:100%;image-si;">
<header>
<div class="clr">
<nav class="navbar navbar-expand-lg navbar-light  " style="background-color: 	#FFFF00	;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:100%;">
<a class="navbar-brand" href="mainhome.php"><img src="falogo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="tutorial.php" ><button class="button" style="margin-left:200px;background-color:yellow;color:brown;width:200px;height:50px;"><span>FARMING TUTORIAL'S</span></button></span>
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

<li>

<li class="nav-item active">
<a class="nav-link" href="#" style="color:#964B00;" onMouseOver="this.style.color='#1FF026'"
onMouseOut="this.style.color='#964B00'">Home <span class="sr-only">(current)</span></a>
</li>

</ul>

</div>
</nav>
</div>
</header>
<section >

<h4 class="animated bounceInRight text-center" style="font-family: 'Libre Baskerville', serif;margin-top:20px;"> Weather Report</h4>
<hr class=" mx-auto w-50 animated zoomIn" style="border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
<p style="font-family: 'Merienda';" class="animated zoomIn">  </p> 








<div class="input">
      <input style="background-color: 	#FFFF00	;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:40px;background-color:white;" type="text" placeholder="Please enter your city" class="input_text">
      <input style="background-color: 	#FFFF00	;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:40px;background-color:pink;opacity:.9;" type="submit" value="Submit" class="submit">
    </div>
  </div>

  <div class="container">
    <div style="background-color: 	#FFFF00	;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:40px;background-color:white;" class="card">
      <h1 class="name" id="name"></h1>
      <p class="temp"></p>
      <p class="clouds"></p>
      <p class="desc"></p>
    </div>
  </div>
<script src="app.js"></script>

















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