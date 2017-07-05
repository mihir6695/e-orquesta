<?php

if(isset($_POST['submit']))
{
	
$booking_id=$_GET['booking_id'];
$status=$_POST['status'];

$sql="UPDATE booking_mul set `status`='$status' WHERE booking_id='$booking_id'";
$query=mysql_query($sql);
if($query)
{
	header('location:index.php?page=booking_mul_notification');
}
else
{
	header('location:index.php');
}
}



?>