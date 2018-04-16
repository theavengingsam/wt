<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="wtdatabase";



// Create connection
$conn =  mysqli_connect($servername, $username, $password,$db);
$user="";
$pass="";
$error="";
	if(isset($_POST['submit']))
	{
		$user=$_POST["Username"];
		$pass=$_POST["Password"];
		//echo $user;
		//echo $pass;
		$sql="SELECT * FROM login where username = '$user' ";
		$result=mysqli_query($conn,$sql);
		$signin=false;
		//echo mysqli_num_rows($result);
		if(	mysqli_num_rows($result)==0)
		{
			$error="Invalid UserName and/or Password";
			//echo $error;
		}
		if(mysqli_num_rows($result) != 0)
		{
			$row=$result->fetch_assoc();
			if(md5($pass)==$row['password'] )
			{
				$signin=true;
				//echo $pass;
				
			}
			else
			{
				$error="Invalid UserName and/or Password";
				//echo $error;
			}
		}
		if($signin==true)
		{
			$_SESSION["user"]=$user;
			$_SESSION["success"]="you are successfully logged in";
			$message = "successfully logged in";
			//echo "<script type='text/javascript'>alert('$message');</script>";
			header('Location:homepageresp.php');
		}
	}
	
?>

