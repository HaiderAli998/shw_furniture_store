<?php require("../requires/connection.php"); ?>
<?php include("header.php"); ?>
<table width="80%" border="1" align="center">

  <tr>
    <td height="463" align="center" valign="middle">
	<form name="myform" action="add-process.php" method="post" enctype="multipart/form-data" >
	<table width="80%" border="0">
  <tr>
    <td height="33" colspan="2" style="font-weight:bold" ><?php
									if($_GET)
									{
									if($_GET['status']=='yes'){ echo "<span style='color:green'>Record Entered Successfully!</span>"; } 
									else{ echo "<span style='color:red'>Sorry There is some issue, Try Again</span>"; }
									}?></td>
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Add Product</strong></td>
  </tr>
	<tr>
    <td>Product ID</td>
    <td><input type="text" name="productId" value="" /></td>
  </tr>
	<td>Product Code</td>
    <td><input type="text" name="productCode" value="" /></td>
  </tr>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName" value="" /></td>
  </tr>
   <tr>
    <td>Product Price</td>
    <td><input type="text" name="productPrice" value="" /></td>
	 <td>Product Discount</td>
    <td><input type="text" name="productDiscount" value="" /></td>
  </tr>
	<td>Product Sizes</td>
    <td><input type="text" name="productSize" value="" /></td>
   <tr>
    <td valign="top">Product Details</td>
    <td valign="top"><textarea cols="80" rows="15" name="productDetails"></textarea></td>
  </tr>
  
    <td>Product In Stock</td>
    <td><select name="productInstock" >
		<option value="Y" >In Stock</option>
		<option value="N" >Not In Stock</option>
		</select></td>
  </tr> 
  <tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file" value="" name="picture"  /></td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Add Product" /></td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
</table>
