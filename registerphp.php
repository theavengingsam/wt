<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="wtdatabase";



// Create connection
$conn =  mysqli_connect($servername, $username, $password,$db);
$fname="";
$lname="";
$user="";
$emailid="";
$pass="";
		if(isset($_POST['submit']))
		{
			$fname=$_POST["FirstName"];
			$lname=$_POST["LastName"];
			$user=$_POST["UserName"];
			$emailid=$_POST["EmailID"];
			$pass=$_POST["Password"];
			//echo $fname;
			//echo $lname;
			//echo $user;
			//echo $emailid;
			//echo $pass;
		}
		$check_user=0;
		$check_user = mysqli_query($conn, "SELECT username FROM login where username = '$user' ");
		$error="sameer";
		$fail=false;
		$register=false;
		//echo $error;
		//$row=$check_user->fetch_assoc();
		//echo $row["username"];
		//echo mysqli_num_rows($check_user);
		
		if(mysqli_num_rows($check_user) != 0 and $user!=null){
			
			$error="User Already exists";
			$user="";
			$fail=true;
		}
		
		if($fail==false and $user!="" and $user!=null)
		{
			$pass_encrypt= md5($pass);
			//echo "hello";
			$sql="INSERT INTO login(username,password,fname,lname,emailid) VALUES ('$user','$pass_encrypt','$fname','$lname','$emailid')";
			$result=mysqli_query($conn,$sql);
			//echo "hel0lo";
			mysqli_close($conn);
			$register=true;
			$fname="";
			$lname="";
			$user="";
			$emailid="";
			$pass="";
			$message = "successfully registered";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//header('Location:newsignupresp.php');
		}
	
	
	
?>

