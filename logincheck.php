<?php
	session_start();
	$conn = mysqli_connect('localhost','root');
	
	
	$db = mysqli_select_db($conn,'ticketreservationsystem');
	
	if(isset($_POST['submit'])){
		$un = $_POST['username'];
		$pw = $_POST['password'];
		
		$sql = "SELECT username and password from user_details where username = '$un' and password = '$pw'";
		
		$query = mysqli_query($conn,$sql);
		
		$row = mysqli_num_rows($query);
		if($row){
			echo "logged in successfully";
			$_SESSION['username'] = $un;
			header('location:index.php');
		}else{
			echo "Error";
			header('location:login.php');
		}
	}
?>