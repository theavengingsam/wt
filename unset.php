<?php include('login.php');
	unset($_SESSION['success']);
	unset($_SESSION['user']);
	$signin==false;
	header('Location:homepageresp.php');
?>
