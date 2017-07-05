<?php

if(isset($_POST['submit']))
{	
	$s_id = $_POST['s_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone_no=$_POST['phone_no'];
	$city=$_POST['city'];
	$gender = $_POST['gender'];
	
	$old_profile=$_POST['old_profile'];
	$profile= $_FILES['profile']['name'];
	$fees = $_POST['fees'];
	if($s_id=='')
	{
		move_uploaded_file($_FILES['profile']['tmp_name'],'admin/upload/artist_profile/'.$profile);
		
		$sql = mysql_query("INSERT INTO `artist`(`first_name`, `middle_name`, `last_name`, `email`, `password`,`phone_no`,`city`, `gender`, `profile`,`fees`) values('$first_name', '$middle_name', '$last_name', '$email', '$password','$phone_no','$city','$gender', '$profile','$fees')");	
		
		
			if($sql)
			{
				header('location:index.php?page=artist_list');	
			}
			else
			{
			header('location:index.php?page=artist_form');
			
			}
	}
	else
	{
		//update
		

			if($profile!='')
			{
		
				unlink('admin/upload/artist_profile/'.$row['profile']);						                
				$profile = $_FILES['profile']['name'];				                
				
				move_uploaded_file($_FILES['profile']['tmp_name'],'admin/upload/artist_profile/'.$profile);
					
			}
			else
			{
				
				$profile = $old_profile;
			
				
			}
			$query=mysql_query("UPDATE `artist` set `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`email`='$email',`password`='$password',`phone_no`='$phone_no',`city`='$city',`gender`='$gender',`profile`='$profile',`fees`='$fees' where `s_id`='$s_id'");
			if($query)
			{
			header('location:index.php?page=artist_list');
			}
			else {
				echo "error";
			}
	}
	
	 
		}
		else
		{
			//delete
			$s_id = $_REQUEST['s_id'];
		
		mysql_query("DELETE FROM `artist` where `s_id`='$s_id'");
		
		header('location:index.php?page=artist_list');
		}
	

?>