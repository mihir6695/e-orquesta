<?php
//print_r($_POST);exit;
if(isset($_POST['submit']))
{	
	$contact_id = $_POST['contact_id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	if($contact_id=='')
	{
		  $sql = mysql_query("INSERT INTO `contact`(`name`,`email`,`subject`,`message`)values('$name','$email','$subject','$message')");
			
			if($sql)
			{
		
header('location:index.php?&msg=snd successfully');
	      //echo "send succesfully";
			}
			
			else
			{
				echo "not";
			}
}

     
			}
			
			
	
?>