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
</head>
<body >
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
</ul>

</div>
</nav>
</div>
</header>
<section >
<div class="container-fluid">
<div class="row mb-5 pt-5">
<div class="col-lg-2 col-md-2 col-12  text-center pl-3" style="height:auto;">
<h4 class="animated bounceInRight" style="font-family: 'Libre Baskerville', serif;">Current Market Price</h4>
<hr class=" mx-auto w-25 animated zoomIn" style="border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">

<ul><li><b>Patato : Rs 150 / 10Kg</b></li>
<li><b>Tamato : Rs 170 / 10Kg</b></li>
<li><b>Capsicum : Rs 140 / 10Kg</b></li>
<li><b>Cabbage : Rs 125 / 10Kg</b></li></ul>
<div class = "vertical animated zoomin"></div>
</div>
<div class="text-center col-lg-10 col-md-10 col-12 " style="height:auto;">
<h4 class="animated bounceInRight text-center" style="font-family: 'Libre Baskerville', serif;"> Direct From Farmers</h4>
<hr class=" mx-auto w-25 animated zoomIn" style="border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
<p style="font-family: 'Merienda';" class="animated zoomIn">  </p> 
<section>
<div class="container pb-5 text-center pt-3" >
<div class="row mb-5 text-center pt-3"> 
<div class="a  col-md-3 col-12 " > 
<div class="card" >
<img class="card-img-top" src="tat.jpeg" height=200 width=200 alt="product image" >
<div class="card-body" style="background: linear-gradient(110deg, #FFFF00 50%,white 70%);">
<h4 class="card-title" >Fresh Patato (Desi)</h4>
<p> Price : Rs 50 For 10kg </p>
<p class="card-text" ></p>
<a href="https://developer.paypal.com/docs/platforms/accept-payments/" ><button class="button"><span>Buy Now!</span></button></a>
</div>
</div>
</div>
<div class="a  col-md-3 col-12 " > 
<div class="card" >
<img class="card-img-top" src="ot.jpg" height=200 width=200 alt="product image" >
<div class="card-body" style="background: linear-gradient(110deg, #FFFF00 50%,white 70%);">
<h4 class="card-title" >Organic Tamato's</h4>
<p> Price : Rs 65 For 7kg </p>

<a href="https://developer.paypal.com/docs/platforms/accept-payments/" ><button class="button"><span>Buy Now!</span></button></a>
</div>
</div>
</div>
<div class="a  col-md-3 col-12 " > 
<div class="card" >
<img class="card-img-top" src="sic.jpg" height=200 width=200 alt="product image" >
<div class="card-body" style="background: linear-gradient(110deg, #FFFF00 50%,white 70%);">
<h4 class="card-title" >Fresh Capsicum</h4>
<p> Price : Rs 95 For 10kg </p>
<p class="card-text" ></p>
<a href="https://developer.paypal.com/docs/platforms/accept-payments/" ><button class="button"><span>Buy Now!</span></button></a>
</div>
</div>
</div>
<div class="a  col-md-3 col-12 " > 
<div class="card" >
<img class="card-img-top" src="bage.jpg" height=200 width=200 alt="product image" >
<div class="card-body" style="background: linear-gradient(110deg, #FFFF00 50%,white 70%);">
<h4 class="card-title" >Organic Fresh Cabbage </h4>
<p> Price : Rs 80 For 9kg </p>
<p class="card-text" ></p>
<a href="https://developer.paypal.com/docs/platforms/accept-payments/" ><button class="button"><span>Buy Now!</span></button></a>
</div>
</div>
</div>

</section>
</div>
</div>
</div>
</section>
<footer class="abt container-fluid" style="color:brown;">
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