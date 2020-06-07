



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login/Sign Up</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="abcde.css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="1style.css" rel="stylesheet">
<title>FarmAssistBuy/Sell </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Bad+Script|Dancing+Script|Galada|Great+Vibes|Kaushan+Script|Lobster|Merienda|Parisienne|Playball|Tangerine&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
<style>
.c{
width:80px;
background-color:yellow;
}
.abt {
background-color: #FFFF00;
height:200px;
width:100%;
}


</style>
</head>
<body 'style="background: linear-gradient(110deg, #FFFFFF 50%,#5D6D7E 70%);">
<header>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:	#FFFF00;;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:100%	;position:; width:auto;top:0px;">
<a class="navbar-brand" href="mainhome.php"><img src="faLogo.png"></a>
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
<li class="nav-item active">
    <a class="nav-link" href="mainhome.php" style="color:#964B00;" onMouseOver="this.style.color='#1FF026'"
onMouseOut="this.style.color='#964B00'">Home <span class="sr-only">(current)</span></a>
</li>
</ul>
</div>
</nav>
</header>
<div id="home_wave">
</div>

<script type="text/javascript">  document.querySelector('.img__btn').addEventListener('click', function() {
document.querySelector('.cont').classList.toggle('s--signup');
}); 



</script>

<p class="tip pt-1" ></p>
<div class="cont" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);position:absolute;top:150px;left:300px;">
<form action="" method="post">
<div class="form sign-in">
<h2>Welcome back,</h2>
<label>
<span>Email</span>
<input type="email" name="emai"/>
</label>
<label>
<span>Password</span>
<input type="password" name="passw" />
</label>

<!--<p class="forgot-pass">Forgot password?</p>-->
<a href="uploadpro.php"><button type="submit" class="submit" name="b1">Sign In</button></a>

</div>
</form>
<div class="sub-cont">
<div class="img">
<div class="img__text m--up">
<h2>New here?</h2>
<p>Sign up and discover great products!</p>
</div>
<div class="img__text m--in">
<h2>Already member?</h2>
<p>If you already has an account, just sign in. We've missed you!</p>
</div>
<div class="img__btn">
<span class="m--up">Sign Up</span>
<span class="m--in">Sign In</span>
</div>
</div>
<form action="register.php" method="post">
<div class="form sign-up">
<h2>Be ready to discover great farm produces,</h2>
<label>
<span>Name</span>
<input type="text" name="userna" />
</label>


<label>
<span>Email</span>
<input type="email" name="emai" />
</label>
<label>
<span>Password</span>
<input type="password" name="passw" />
</label>
<button type="submit" class="submit">Sign Up</button>

</div>
</form>
</div>
</div>
<footer class="abt container-fluid" style="color:green;position:absolute;top:100%;">
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


</body>
<script type="text/javascript">  document.querySelector('.img__btn').addEventListener('click', function() {
document.querySelector('.cont').classList.toggle('s--signup');
}); </script>
</html>


<?php
if(isset($_POST['b1'])){
session_start();

$con =mysqli_connect('localhost','root');
mysqli_select_db($con,'userregistration');
if(isset($_POST['emai'])){
$ema=$_POST['emai'];
}
if(isset($_POST['passw'])){
$pass=$_POST['passw'];
}
$s="select * from usertable where email ='$ema' && password='$pass' ";
$result=mysqli_query($con,$s);
$arr=mysqli_fetch_array($result);
$_SESSION['username']=$arr[0];
header('#');

}

?>