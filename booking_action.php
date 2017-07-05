<?php
//print_r($_POST);
if(isset($_POST['submit']))
{	
	 $book_id = $_SESSION['book_id'];
	 $a_id = $_POST['s_id'];
	 
	 $c_id = $_POST['c_id'];
	 $fees=$_POST['fees'];
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $starttime=$_POST['starttime'];
	 $endtime=$_POST['endtime'];
	 $date=$_POST['date'];
	 $address=$_POST['address'];
	 $phone_no=$_POST['phone_no'];	
	 $city=$_POST['city'];
	 $state=$_POST['state'];
	
	if($book_id=='')
	{
	$sql = mysql_query("INSERT INTO booking(a_id,c_id,fees,name,email,starttime,endtime,date,address,phone_no,city,state)values('$a_id','$c_id','$fees','$name','$email','$starttime','$endtime','$date','$address','$phone_no','$city','$state')");
	//echo "INSERT INTO booking(book_id,a_id,c_id,fees,name,email,starttime,endtime,date,address,phone_no,city,state)values('$book_id','$a_id','$c_id','$fees','$name','$email','$starttime','$endtime','$date','$address','$phone_no','$city','$state')";exit;
	
	
	if($sql)
	{
		header('location:index.php?page=booking_list');
			
	}
	else
	{
		echo "not";
	}
}

      /* else
{
		
		$query=mysql_query("UPDATE `artist` set `name`='$name',`middle_name`='$middle_name',`last_name`='$last_name',`email`='$email',`password`='$password',`fees`='$fees',`phone_no`='$phone_no',`gender`='$gender' where `s_id`='$s_id'");
			if($profile!='')
			{
		
				$select = mysql_query("select * from `artist` where `s_id`='$s_id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/artist_profile/'.$row['profile']);						                
				move_uploaded_file($_FILES['profile']['tmp_name'],'upload/artist_profile/'.$profile);
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
	}*/
			}
			
			
	
?>