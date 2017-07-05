<?php
//print_r($_POST); exit;
if(isset($_POST['submit']))
{	
	$c_id = $_POST['c_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone_no=$_POST['phone_no'];
	$gender = $_POST['gender'];
	$profile= $_FILES['profile']['name'];
	if($c_id=='')
	{
		move_uploaded_file($_FILES['profile']['tmp_name'],'upload/customer_profile/'.$profile);
//		$sql = mysql_query("INSERT INTO `custmore`(`first_name`, `middel_name`, `last_name`, `email`, `password`, `reenter_password`, `phone_no`, `gender`, `profile` ) values('$first_name', '$middel_name', '$last_name', '$email', '$password', '$reenter_password', '$phone_no', '$gender', '$profile')");	
		$sql=mysql_query("INSERT INTO `custmore` (`first_name`, `middle_name`, `last_name`, `email`, `password`, `phone_no`, `gender`,`profile`) VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$password', '$phone_no', '$gender','$profile')");
		
			if($sql)
			{
				//$_SESSION['sucMsg'] = "Record insert successfully";
				header('location:index.php?page=customer_list');	
			}
			else
			{
			//$_SESSION['errMsg'] = "Record inserted Failed";
			header('location:index.php?page=customer_form');
			
			}
	}
	else
	{
		//update
		
	$query=mysql_query("UPDATE `custmore` set `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`email`='$email',`password`='$password',`phone_no`='$phone_no',`gender`='$gender',`profile`='$profile' where `c_id`='$c_id'");
		if($profile!='')
			{
		
				$select = mysql_query("select * from `custmore` where `c_id`='$c_id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/customer_profile/'.$row['profile']);						                
				move_uploaded_file($_FILES['profile']['tmp_name'],'upload/customer_profile/'.$profile);
				$sql2 = "update admin set `profile`='$profile' where `c_id`='$c_id'";
				$result2=mysql_query($sql2);				
					
			}
			
		/* if($profile!='')
			{
		
				$select = mysql_query("select * from `custmore` where `c_id`='$c_id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/customer_profile/'.$row['profile']);						                
				move_uploaded_file($_FILES['profile']['tmp_name'],'upload/customer_profile/'.$profile);
				$sql2 = "update admin set `profile`='$profile' where `c_id`='$c_id'";
				$result2=mysql_query($sql2);				
					
			}*/
			
			if($query || $result2)
			{
			header('location:index.php?page=customer_list');
			}
			else {
				echo "error";
			}
	}
	
	 
		}
		else
		{
			//delete
			$c_id = $_REQUEST['c_id'];
		
		mysql_query("DELETE FROM `custmore` where `c_id`='$c_id'");
		
		header('location:index.php?page=customer_list');
		}
	

?>