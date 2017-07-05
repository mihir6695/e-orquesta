<?php
include('include/config.php');
session_start();
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = mysql_query("select * from `artist_mul` where `email`='$email' and `password`='$password'");
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
		$_SESSION['group_name'] = $row['group_name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['password'] = $row['password'];
		header('location:index.php');
	}
}
?>