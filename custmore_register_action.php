<?php
//print_r($_POST);
if(isset($_POST['submit']))
{	
	$c_id = $_SESSION['c_id'];
	$first_name=$_POST['first_name'];
	$middle_name=$_POST['middle_name'];
	$last_name =$_POST['last_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone_no=$_POST['phone_no'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$profile = $_FILES['profile']['name'];
	
	if($c_id==''){
		move_uploaded_file($_FILES['profile']['tmp_name'],'admin/upload/custmore_profile/'.$profile);
		  $sql = mysql_query("INSERT INTO custmore(first_name,middle_name,last_name,email,password,phone_no,city,gender,profile)values('$first_name','$middle_name','$last_name','$email','$password','$phone_no','$city','$gender','$profile')");
			
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
		
		$query=mysql_query("UPDATE `custmore` set `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`email`='$email',`password`='$password',`phone_no`='$phone_no',`city`='$city',`gender`='$gender' where `c_id`='$c_id'");
			if($profile!='')
			{
		
				$select = mysql_query("select * from `custmore` where `c_id`='$c_id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/custmore_profile/'.$row['profile']);						                
				move_uploaded_file($_FILES['profile']['tmp_name'],'admin/upload/custmore_profile/'.$profile);
				$sql2 = "update custmore set `profile`='$profile' where `c_id`='$c_id'";
				$result2=mysql_query($sql2);				
					
			}
			if($query || $result2)
			{
			header('location:index.php?page=custmore_profile');
			}
			else {
				echo "error";
			}
	}
			}
			
			
	
?>