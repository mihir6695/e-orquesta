<?php
//print_r($_POST);
if(isset($_POST['submit']))
{	
	$s_id = $_SESSION['s_id'];
	$first_name=$_POST['first_name'];
	$middle_name=$_POST['middle_name'];
	$last_name =$_POST['last_name'];
	$email=$_POST['email'];
	$description=$_POST['description'];
	$timeschedule=$_POST['timeschedule'];
	$date=$_POST['date'];
	$password=$_POST['password'];
	$fees=$_POST['fees'];
	$phone_no=$_POST['phone_no'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$profile = $_FILES['profile']['name'];
	
	if($s_id==''){
		move_uploaded_file($_FILES['profile']['tmp_name'],'admin/upload/artist_profile/'.$profile);
		  $sql = mysql_query("INSERT INTO artist(first_name,middle_name,last_name,email,description,timeschedule,password,fees,phone_no,city,gender,profile)values('$first_name','$middle_name','$last_name','$email','$description','$timeschedule','$password','$fees','$phone_no','$city','$gender','$profile')");
			
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
		
		$query=mysql_query("UPDATE `artist` set `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`email`='$email',`description`='$description',`timeschedule`='$timeschedule',`password`='$password',`fees`='$fees',`phone_no`='$phone_no',`gender`='$gender' where `s_id`='$s_id'");
			if($profile!='')
			{
		
				$select = mysql_query("select * from `artist` where `s_id`='$s_id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('admin/upload/artist_profile/'.$row['profile']);						                
				move_uploaded_file($_FILES['profile']['tmp_name'],'admin/upload/artist_profile/'.$profile);
				$sql2 = "update artist set `profile`='$profile' where `s_id`='$s_id'";
				$result2=mysql_query($sql2);				
					
			}
			if($query || $result2)
			{
			header('location:index.php?page=artist_myprofile');
			}
			else {
				echo "error";
			}
	}
			}
			
			
	
?>