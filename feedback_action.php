<?php
//print_r($_POST);exit;
if(isset($_POST['submit']))
{	
	$feed_id = $_GET['feed_id'];
	$c_id=$_SESSION['c_id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	if($feed_id=='')
	{
		  $sql = mysql_query("INSERT INTO `feedback`(`c_id`,`name`,`email`,`subject`,`message`)values('$c_id','$name','$email','$subject','$message')");
			
			if($sql)
			{
			//_SESSION['sucMsg'] = "Record insert successfully";
			//echo "successfully";
		
header('location:index.php?page=home&msg=snd successfully');
			
			}
			
			else
			{
				echo "not";
			}
}
}
     
			

?>