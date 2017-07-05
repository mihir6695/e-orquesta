<?php
include('include/config.php');
session_start();
/*if($_GET['action']=='logout')
{
	session_destroy();
	header('location:index.php');
}*/
if(isset($_POST['submit']))
{
	print_r($_POST);
	echo $type = $_POST['type'];
	echo $email = $_POST['email'];
	echo $password = $_POST['password'];
	
	if($type=='single_artist')
	{
		echo $sql = mysql_query("select * from `artist` where `email`='$email' and `password`='$password'");
		$count = mysql_num_rows($sql);
	
		if($count<=0)
		{
			echo "Invalid email or password";	
		}
		else
		{
			$row = mysql_fetch_assoc($sql);
			// Session Set
			echo $_SESSION['type'] ='single_artist';
			echo $_SESSION['s_id'] = $row['s_id'];
			echo $_SESSION['first_name'] = $row['first_name'];
			echo $_SESSION['email'] = $row['email'];
			echo $_SESSION['password'] = $row['password'];
			header('location:index.php?page=home');
		}
	}
	else if($type=='mul_artist')
	{
		$sql = mysql_query("select * from `artist_mul` where `email`='$email' and `password`='$password'");
		$count = mysql_num_rows($sql);
		if($count<=0)
		{
			echo "Invalid email or 	password";	
		}
		else
		{
			$row = mysql_fetch_assoc($sql);
			// Session Set
			$_SESSION['type'] ='mul_artist';
			$_SESSION['mul_id'] = $row['mul_id'];
			$_SESSION['group_name'] = $row['group_name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
			header('location:index.php?page=home');
		}
	}
	else if($type=='customer')
	{	
		$sql = mysql_query("select * from `custmore` where `email`='$email' and `password`='$password'");
		$count = mysql_num_rows($sql);
		if($count<=0)
		{
			echo "Invalid email or password";	
		}
		else
		{
			$row = mysql_fetch_assoc($sql);
			// Session Set
			$_SESSION['type'] ='customer';
			$_SESSION['c_id'] = $row['c_id'];
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
			header('location:index.php?page=home');
		}
	}
}	
?>