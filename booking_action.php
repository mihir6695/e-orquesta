<?php
//print_r($_POST);
if(isset($_POST['submit']))
{	
	 $book_id = $_SESSION['book_id'];
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
	$sql = mysql_query("INSERT INTO booking(book_id,fees,name,email,starttime,endtime,date,address,phone_no,city,state)values('$book_id','$fees','$name','$email','$starttime','$endtime','$date','$address','$phone_no','$city','$state')");
	echo "INSERT INTO booking(book_id,fees,name,email,starttime,endtime,date,address,phone_no,city,state)values('$book_id','$fees','$name','$email','$starttime','$endtime','$date','$address','$phone_no','$city','$state')";exit;
//echo $sql=mysql_query("INSERT INTO `booking` ( `book_id`, `fees`, `name`, `email`,  `starttime`, `endtime`, `date`, `address`, `phone_no`) VALUES ('$book_id', '$fees', '$name', '$email', '$starttime', '$endtime', '$address', '$phone_no')");
	//exit;
	
	
	if($sql)
	{
		header('location:index.php?page=booking_list');
			
	}
	else
	{
		echo "not";
	}
}

       else
{
		
		$query=mysql_query("UPDATE `booking` set `fees`='$fees',`name`='$name',`email`='$email',`starttime`='$starttime',`endtime`='$endtime',`date`='$date',`address`='$address',`	phone_no`='$phone_no' where `book_id`='$book_id'");
			
			if($query)
			{
			header('location:index.php?page=booking_list');
			}
			else {
				echo "error";
			}
	}
			}
			
			else
		{
			//delete
			$book_id = $_REQUEST['book_id'];
		
		mysql_query("DELETE FROM `booking` where `book_id`='$book_id'");
		
		header('location:index.php?page=booking_list');
		}
	
	
?>