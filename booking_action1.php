<?php

if(isset($_POST['submit']))
{
	
$book_id=$_GET['book_id'];
$status=$_POST['status'];

 $sql="UPDATE booking set `status`='$status' WHERE book_id='$book_id'";
$query=mysql_query($sql);
if($query)
{
	header('location:index.php?page=booking_notification');
}
else
{
	header('location:index.php');
}
}



?>