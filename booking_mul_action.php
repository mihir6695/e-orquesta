<?php
if(isset($_POST['submit']))
{	
	 $booking_id = $_POST['booking_id'];
	 $mul_id = $_POST['mul_id'];
	 $c_id = $_SESSION['c_id'];
	 $fees=$_POST['fees'];
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $starttime=$_POST['starttime'];
	 $endtime=$_POST['endtime'];
	 $date=$_POST['date'];
	 $address=$_POST['address'];
	 $phoneno=$_POST['phoneno'];	
	 $city=$_POST['city'];
	 $state=$_POST['state'];
	 $status=$_POST['status'];
	
	if($booking_id=='')
	{
	$sql = mysql_query
	("INSERT INTO booking_mul
	(mul_id,c_id,fees,name,email,
	starttime,endtime,date,address,
	phoneno,city,state,status)values
	('$mul_id','$c_id','$fees','$name',
	'$email','$starttime','$endtime','$date',
	'$address','$phoneno','$city','$state','$status')");
	
	
	if($sql)
	{
		header('location:index.php?page=booking_mul_list');
			
	}
	else
	{
		echo "not";
	}
}
		}
			
			
	
?>