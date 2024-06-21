<?php require("../requires/connection.php"); ?>
<table width="80%" border="1" align="center">
 <?php include("header.php"); ?>

    <td height="463" align="center" valign="top">
			<table> 
			<tr> 
			<td height="33" colspan="2" style="font-weight:bold"  ><?php 
											if($_GET)
											{
												if($_GET['status']=='updated') echo "<span style='color:green'>Record Successfully Updated!</span>";
												elseif($_GET['status']=='deleted') echo "<span style='color:green'>Record Successfully Deleted!</span>"; 
												else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
											}?></td>
			</tr>
			</table>
			
			<table width="100%" border="0">
			<h1>View All Website pages</h1>
			  <tr>
				<td style="border-bottom:1px solid" width="10%"><strong>Product Id</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Product Name</strong></td>
				<td style="border-bottom:1px solid" width="20%"><strong>Product Price</strong></td>
				 <td style="border-bottom:1px solid" width="10%"><strong>Product Image</strong></td>
				<td style="border-bottom:1px solid" width="5%"><strong>Product In Stock</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Operations</strong></td>
			  </tr>
			  

	<?php	
	
		$sql="SELECT * FROM tblproducts order by productId";
		$result=mysqli_query($connection,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
			?>
			<tr style="border-bottom:1px solid">
			<td style="border-bottom:1px solid"><?=$row["productId"]?></td>
				<td style="border-bottom:1px solid"><?=$row["productName"]?></td>
				<td style="border-bottom:1px solid"><?=$row["productPrice"]?></td>
			<td style="border-bottom:1px solid"><img src="../img/uploads/<?=$row["picture"]?>" height="50" width="50"  /></td>
			<td style="border-bottom:1px solid"><?=$row["productInstock"]?></td>
			<td style="border-bottom:1px solid">
			<a href="edit-product.php?pId=<?=$row["productId"]?>">Edit</a> | 
			<a href="delete-product.php?pId=<?=$row["productId"]?>">Delete</a></td>
		  </tr>
			<?php
			}
		} 
	?>
	
			
			</table>
	</td>
  </tr>
</table>
</form>
	
	</td>

</table>
