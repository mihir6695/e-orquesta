<?php
include('include/config.php');
session_start();
if(isset($_POST['submit']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = mysql_query("select * from `admin` where `email`='$email' and `password`='$password'");
	
	$count = mysql_num_rows($sql);
	if($count<=0)
	{
		echo "Invalid email or password";
	}
	else
	{
		$row = mysql_fetch_assoc($sql);
		// Session Set
		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		header('location:index.php');	
	}
}    

/*// Admin Logout
if(isset($_REQUEST['action']) && $_REQUEST['action']=='logout'){
	unset($_SESSION['adminId']);
	unset($_SESSION['adminName']);
	header('location:./index.php');
}

// Admin Login
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "select * from admin where email='$username' and password='$password' and status='Active'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	
	if($count<=0){
		echo "Invalid Username and Password";
		header('location:login.php');	
	}else{
		$row = mysql_fetch_assoc($result);
		
		// Set Session
		$_SESSION['adminId'] = $row['id'];
		$_SESSION['adminName'] = $row['name'];
		
		// Set Cookies
		
		
		header('location:../index.php');	
	}
}*/
?>