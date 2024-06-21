	<?php session_start(); 


if($_SESSION['username']=="")
{
session_destroy();
header("Location:index.php");
}
?>
<head>
<link href="../css/CSSSTYLE.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<body>
	

<div class="header">
		<div >
			Welcome <?=$_SESSION['username']?> | <a href="logout.php" style="color: aliceblue">Logout</a>
			<a href="welcome.php" style="color: white; text-decoration: underline;"     >Home</a>
			<a href="add-products.php" style="color: white; text-decoration: underline;"               >Add Product</a>
			<a href="view-products.php" style="color: white; text-decoration: underline;"               >View products</a>
			</div>
	  </div>