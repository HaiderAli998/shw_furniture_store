
<?php
require("../requires/connection.php"); 
$myusername = $_POST['myusername']; 
$mypassword = $_POST['mypassword'];
		$encriptedPass=md5($mypassword);
		$sql="SELECT * FROM tblusers WHERE username='$myusername' and userpassword='$encriptedPass'";
		$result=mysqli_query($connection,$sql);
		
		$count=mysqli_num_rows($result);
		if($count==1)
		{
		session_start();
		
		$_SESSION['username']=$myusername;
		$_SESSION['password']=$mypassword;
		
		header("Location: welcome.php");
		exit( );
		}
		else 
		{
		echo "Wrong Username or Password";
					?> <a href="index.php"><button> Retry</button></a>
		<?php }


?>