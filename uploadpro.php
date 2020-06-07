<?php 



?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="1style.css" rel="stylesheet">
<title>FarmAssistHome </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Bad+Script|Dancing+Script|Galada|Great+Vibes|Kaushan+Script|Lobster|Merienda|Parisienne|Playball|Tangerine&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
<style>

</style>
<link rel="stylesheet" type="text/css" href="abcde.css">
</head>
<body style="background-image:url('f2.jpg'); background-repeat: no-repeat;background-size:100%;image-si;">

<header>
<div class="clr">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: 	#FFFF00	;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:100%;">
<a class="navbar-brand" href="mainhome.php"><img src="falogo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="tutorial.php" ><button class="button" style="margin-left:200px;background-color:yellow;color:brown;width:200px;height:50px;"><span>FARMING TUTORIAL'S</span></button></span>
</button>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="buyfarm.php" ><button class="button" style="background-color:yellow;color:brown;width:200px;height:50px;"><span>BUY PRODUCTS</span></button></span>
</button>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="upload.php" ><button class="button" style="background-color:yellow;color:brown;width:200px;height:50px;"><span>SELL PRODUCTS</span></button></span>
</button>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><a href="weather.php" ><button class="button" style="background-color:yellow;color:brown;width:200px;height:50px;"><span>WEATHER REPORTS</span></button></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:50px;">
<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown" >
<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"  onMouseOver="this.style.color='#1FF026'"
onMouseOut="this.style.color='#964B00'"><i class='fas' onMouseOver="this.style.color='#1FF026'"
onMouseOut="this.style.color='#964B00'">&#xf007; </i></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="farmform.php"> Login</a>
<a class="dropdown-item" href="farmform.php">Sign-Up</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Language
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#"> English</a>
<a class="dropdown-item" href="hindifarm.php">Hindi</a>
</div>
</li>

<li class="nav-item">
</ul>
</div>
</nav>
</div>
</header>




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
					<a href="farmform.php"><button type="submit" class="submit" name="b1">Upload</button></a>
				</form>
</div>
			</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>
<?php
$pname=" ";$cate=" ";$prc=" ";$dt=" ";$des=" ";$file=" ";    
	$na=$_SESSION['username'];
	$con =mysqli_connect('localhost','root');
	mysqli_select_db($con,'userproduct');
	if(isset($_POST['b1'])){
		if(isset($_POST['t1'])){
			$pname=$_POST['t1'];
		}
		if(isset($_POST['o1'])){
			$cate=$_POST['o1'];
		}
		if(isset($_POST['t2'])){
			$prc=$_POST['t2'];
		}
		if(isset($_POST['d1'])){
			$dt=$_POST['d1'];
		}
		if(isset($_POST['ta1'])){
			$des=$_POST['ta1'];
		}
		if(isset($_FILES['f1']))
					{
						$a=".";
						$errors= array();
						$file_name = $_FILES['f1']['name'];
						$file_size =$_FILES['f1']['size'];
						$file_tmp =$_FILES['f1']['tmp_name'];
						$file_type=$_FILES['f1']['type'];
						$file_ext=explode($a,$file_name);
						$file_ext=end($file_ext);
						$extensions= array("jpeg","jpg");
      
						if(in_array($file_ext,$extensions)=== false)
						{
							$errors[]="extension not allowed, please choose a JPEG or JPG file.";
						}
      
						if($file_size > 12097152)
						{
							$errors[]='File size must be excately 2 MB';
						}
      
						if(empty($errors)==true)
						{
							if(!file_exists("upload/$na/"))
							{
								mkdir("upload/$na/");
							}
							move_uploaded_file($_FILES['f1']['tmp_name'],"upload/$na/".$file_name);
							
							$file="upload/$na/".$file_name." ";
							
							
						}
						else
						{
						print_r($errors);
						}
					}
		
	$query="insert into products(name,product_name,category,price,img,date,description) values('$na','$pname','$cate','$prc','$file','$dt','$des')";
	if(mysqli_query($con,$query)){
	
		echo "<p style='position:absolute;top:1000px;right:625px;font-family: 'Libre Baskerville', serif;'>Product uploaded</p>";
	
	}
    }
    ?>
