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
.c{
  width:80px;
  background-color:yellow;
}
span{
	font-family: 'Libre Baskerville', serif;
}
input{
	font-family: 'Libre Baskerville', serif;
}
textarea{
	font-family: 'Libre Baskerville', serif;
}
</style>
<link rel="stylesheet" type="text/css" href="abcde.css">
</head>
<body style="background: linear-gradient(110deg, #eef2f3 50%, #8e9eab 70%);">
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
      
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
		  <li class="nav-link active" style="color:#7FFF00;">
      <div class="wallet">
		
	
	</div>
      </li>
      
      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"> Cars</a>
          <a class="dropdown-item" href="#">Bikes</a>
          <a class="dropdown-item" href="#">Real State</a>
          <a class="dropdown-item" href="#">Furnishings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
        <a class="nav-link active" href="sell_upload.php" tabindex="-1" aria-disabled="true">Sell Product</a>
		  <li class="nav-item">
        <a class="nav-link" href="logout.php"> Logout </a>
      </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="c btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      
      </nav>
      </header>
      <div id="home_wave">
        </div>
      
<div style="margin-top: 70px; ">
	<!--<a href="mainhome.php"><p><-Back</p></a>-->
	
			<div class="form" style="position:absolute;left:490px;border-radius:100px;background: linear-gradient(110deg, #948E99 50%,#abbaab 70%);">
				<div class="box"><form method="POST" action=" " enctype="multipart/form-data">
					<label>
					<span>Name of Product</span>
					<input type="text" name="t1">
					</label>
					<label>
					<span>Category</span>
					<div class="box">
					<select >
					<option>Vegetable Name</option>
					<option value="Mobile" name="o1">Ladyfinger</option>
					<option value="Laptop" name="o1">Patato</option>
					<option value="Furniture" name="o1">Tamato</option>
					<option value="Car" name="o1"></option>
					</select>
                    </div>
					</label>
					<label>
					<span>Enter Price</span>
					<input type="text" name="t2">
					</label>
					<label>
					<span>Choose an image</span>
					<input type="file" name="f1">
					</label>
					<label>
					<input type="date" name="d1">
					</label>
					<label>
					<span>Description</span>
					<textarea style="background-image:url(images/form_bg.jpg);
	background-repeat:repeat-x;
	border:1px solid yellow;
	width: 230px;
	height: 60px;
	color:#333333;
	padding:3px;
	margin-right:4px;
	margin-bottom:8px;
	font-family:tahoma, arial, sans-serif;"name="ta1" rows="5" cols="20"></textarea>
					</label>
					<button type="submit" class="submit" name="b1">Upload</button>
				</form>
</div>
			</div>
</div>

	
</body>	
</html>
<?php
	

?>

