<?php

if(isset($_POST['submit']))
{	
	$mul_id = $_POST['mul_id'];
	$group_name = $_POST['group_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phoneno=$_POST['phoneno'];
	$group_member=$_POST['group_member'];
	$city=$_POST['city'];
	
	$old_profile=$_POST['old_profile'];
	$profile= $_FILES['profile']['name'];
	
	$upld_file = $_POST['upld_file'];
	$fees = $_POST['fees'];
	if($mul_id=='')
	{
		move_uploaded_file($_FILES['profile']['tmp_name'],'upload/artist_mul_profile/'.$profile);
		
		$sql = mysql_query("INSERT INTO `artist_mul`(`group_name`,`email`, `password`,`phoneno`,`group_member`,`city`,`profile`,`upld_file`,`fees`) values('$group_name', '$email', '$password','$phoneno','$group_member','$city','$profile','$upld_file','$fees')");	
		
		
			if($sql)
			{
				header('location:index.php?page=artist_mul_list');	
			}
			else
			{
			header('location:index.php?page=artist_mul_form');
			
			}
	}
	else
	{
		//update


		
	if($profile!='')
			
			{											               
				unlink('upload/artist_mul_profile/'.$row['profile']);		
				$profile = $_FILES['profile']['name'];				                
				move_uploaded_file($_FILES['profile']['tmp_name'],'upload/artist_mul_profile/'.$profile);
					
			}
			else
			{
				
				$profile = $old_profile;
			
				
			}
			$query=mysql_query("UPDATE `artist_mul` set `group_name`='$group_name',`email`='$email',`password`='$password',`phoneno`='$phoneno',`group_member`='$group_member',`city`='$city',`profile`='$profile',`upld_file`='$upld_file',`fees`='$fees' where `mul_id`='$mul_id'");
		
			if($query)
			{
			header('location:index.php?page=artist_mul_list');
			}
			else {
				echo "error";
			}
	}
	
	 
		}
		else
		{
			//delete
			$mul_id= $_GET['mul_id'];
		
		mysql_query("DELETE FROM `artist_mul` where `mul_id`='$mul_id'");
		
		header('location:index.php?page=artist_mul_list');
		}
	

?>