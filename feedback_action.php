<?php
//print_r($_POST); exit;
if(isset($_POST['submit']))
{	
	$feed_id=$_POST['feed_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $feedback = $_POST['feedback'];
	$status = $_POST['status'];
	if($feed_id=='')
	{
		$sql=mysql_query("INSERT INTO `feedback`(`c_id`,`name`,`email`,`contact_no`,`feedback`,`status`)values('$c_id','$name','$email','$contact_no','$feedback','$status')");	
		if($sql)
		{
			$_SESSION['sucMsg'] = "Record insert successfully";
			header('location:index.php?page=feedback_list');	
		}
		else
		{
			$_SESSION['errMsg'] = "Record inserted Failed";
			header('location:index.php?page=feedback_form');
		}
	}
	else
	{
		//update
		$query=mysql_query("UPDATE `feedback` set `c_id`='$c_id',`name`='$name',`email`='$email',`contact_no`='$contact_no',`feedback`='$feedback',`status`='$status' where `feed_id`='$feed_id'");
		if($query)
		{
			header('location:index.php?page=feedback_list');
		}
		else 
		{
			echo "error";
		}
	}
}
else
{
	//delete
	$feed_id=$_GET['feed_id'];
	$sql=mysql_query("DELETE FROM `feedback` where `feed_id`='$feed_id'");
	if($sql)
	{
		header('location:index.php?page=feedback_list');
	}
	else
	{
		echo "fail";
	}
}
?>