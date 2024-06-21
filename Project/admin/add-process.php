<?php
@require("../requires/connection.php"); 

$productId		= $_POST['productId']; 
$productCode		= $_POST['productCode']; 
$productName		= $_POST['productName']; 
$productPrice		= $_POST['productPrice'];
$productDiscount		= $_POST['productDiscount']; 
$productSize		= $_POST['productSize']; 
$productDetails	= $_POST['productDetails']; 
$productInstock		= $_POST['productInstock']; 

$picture		= $_FILES['picture']["name"]; 

	$newName=$productId."-".$picture;
	
	if($picture!="")
	{
	move_uploaded_file($_FILES['picture']['tmp_name'], '../img/uploads/'.$newName); 
	}

 $sql = "INSERT INTO tblproducts  SET productId='$productId',
 									 productName='$productName', 
									 productPrice='$productPrice',
									 productCode='$productCode',
									 productInstock='$productInstock',
									 productDiscount='$productDiscount',
									 productSizes='$productSize',
									 productDetails='$productDetails',
									 picture='$newName' ";

 
$result = mysqli_query($connection,$sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 
	header("Location: add-products.php?status=yes");
 

mysqli_close($connection);
?>