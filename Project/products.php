<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Products</title>
<?php include('header.php');?>
<style>

.box:hover {
  background-color:#D6D5D5;
  transform: scale(1.2); }

a:focus {color:#000000; }

.box {
	 background-color:#FFFFFF ; margin:20px ; text-align:center; transition: transform .2s ease; }

img { WIDTH:250px; HEIGHT:200px; float:center;	}
	
a {
	font-weight:700;
	font-size:14px; }
	
u {font-size:16px;
font-weight:900; }

</style>
</head>

<body style="background-color:#F5F5F5">

	<div class="container" >
	<div class="row " style=" WIDTH:50px; HEIGHT:50px" > </div>
</div>
<?php include("includes/3prods.php"); ?> 
<div class="container" >
	<div class="row" >
		<div class="col-md-1" > </div>

		<div class="col-md-3 box"> <a target="_blank" href="#"><img src="img/0594830_PE676181_S5.jpg" /> <u> MALM</u> <br>Ottoman bed, black-brown, Standard Double </a > </div>
 
    	<div class="col-md-3 box" > <a target="_blank" href="# "><img src="img/0672371_PE716638_S5.jpg"/> <u>JOKKMOKK </u> <br> Table and 4 chairs, antique stain </a></div>
 
 		<div class="col-md-3 box"> <a target="_blank" href="#"><img src="img/0651126_PE706767_S5.jpg" /> <u>KNOPPARP </u> <br> 2-seat sofa, Knisa light grey </a></div>
	</div>
</div>

<div class="container" >
	<div class="row " style=" WIDTH:100px; HEIGHT:100px" > </div>
</div>
<?php include("includes/footer.php");?>

</body>
</html>
