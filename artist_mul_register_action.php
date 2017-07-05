<?php
//print_r($_POST);
if(isset($_POST['submit']))
{	
	$mul_id = $_SESSION['mul_id'];
	$group_name=$_POST['group_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phoneno=$_POST['phoneno'];
	$group_member=$_POST['group_member'];
	$city=$_POST['city'];
	$old_profile=$_POST['old_profile'];
	$profile = $_FILES['profile']['name'];
	$fees=$_POST['fees'];
		$date=$_POST['date'];
	if($mul_id==''){
		move_uploaded_file($_FILES['profile']['tmp_name'],'admin/upload/artist_mul_profile/'.$profile);
		  $sql = mysql_query("INSERT INTO `artist_mul`(`group_name`,`email`,`password`,`phoneno`,`group_member`,`city`,`profile`,`fees`,`date`)values('$group_name','$email','$password','$phoneno','$group_member','$city','$profile','$fees','$date')");
			
			if($sql)
			{
			header('location:index.php?#login');
			
			}
			
			else
			{
				echo "not";
			}
}
else
	{
		//update
		

			if($profile!='')
			{
				unlink('admin/upload/artist_mul_profile/'.$row['profile']);
				$profile = $_FILES['profile']['name'];													               
										                
				move_uploaded_file($_FILES['profile']['tmp_name'],'admin/upload/artist_mul_profile/'.$profile);
			}
			else
			{
				$profile = $old_profile;
			}
			$query=mysql_query("UPDATE `artist_mul` set `group_name`='$group_name',`email`='$email',`password`='$password',`phoneno`='$phoneno',`group_member`='$group_member',`city`='$city',`profile`='$profile',`upld_file`='$upld_file',`fees`='$fees',`date`='$date' where `mul_id`='$mul_id'");

			if($query)
			{
			header('location:index.php?page=artist_mul_profile');
			}
			else {
				echo "error";
			}
	}
	
			}
			
?>