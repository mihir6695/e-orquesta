<?php
//print_r($_POST); exit;

if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$profile= $_FILES['profile']['name'];
	$type= $_POST['type'];
	$status= $_POST['status'];
	if($id=='')
	{
		move_uploaded_file($_FILES['profile']['tmp_name'],'upload/admin_profile/'.$profile);
		$sql = mysql_query("INSERT INTO `admin`(`name`,`email`,`password`,`profile`,`type`,`status` ) values('$name','$email','$password','$profile','$type','$status')");	
			if($sql)
			{
				$_SESSION['sucMsg'] = "Record insert successfully";
				header('location:index.php?page=admin_list');	
			}
			else
			{
			$_SESSION['errMsg'] = "Record inserted Failed";
			header('location:index.php?page=admin_form');
			
			}
	}
	else
	{
		//update
		
			$query=mysql_query("UPDATE `admin` set `name`='$name',`email`='$email',`password`='$password',`type`='$type',`status`='$status' where `id`='$id'");
			
			if($profile!='')
			{
		
				$select = mysql_query("select * from `admin` where `id`='$id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/admin_profile/'.$row['profile']);						                
				move_uploaded_file($_FILES['profile']['tmp_name'],'upload/admin_profile/'.$profile);
				$sql2 = "update admin set `profile`='$profile' where `id`='$id'";
				$result2=mysql_query($sql2);				
					
			}
			
			if($query || $result2)
			{
			header('location:index.php?page=admin_list');
			}
			else {
				echo "error";
			}
	}
	
	 
		}
		else
		{
			//delete
			$id = $_REQUEST['id'];
		
		mysql_query("DELETE FROM `admin` where `id`='$id'");
		
		header('location:index.php?page=admin_list');
		}
	

?>