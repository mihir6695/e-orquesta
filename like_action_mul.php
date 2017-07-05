<?php
//print_r($_POST); exit;
$like_id = $_POST['like_id'];
	$mul_id = $_GET['mul_id'];
	$c_id = $_SESSION['c_id'];
	$status=$_POST['status'];
	if($like_id=='')
	{	
		$sql1 = mysql_query("select * from `like_mul` where mul_id='$mul_id' AND c_id='$c_id'");
		$count=mysql_num_rows($sql1);
		
		if($count<=0)
		{
			
			$sql = mysql_query("INSERT INTO `like_mul` (`mul_id`,`c_id`,`status` ) values('$mul_id','$c_id','like')");	
			if($sql)
			{
				header('location:index.php?page=home');	
			}
		
		}
		else
		{
			$row=mysql_fetch_assoc($sql1);
			
			if($row['status']=='like')
			{
				$sql = mysql_query("update `like_mul` SET status='unlike' where mul_id='$mul_id' AND c_id='$c_id'");	
				if($sql)
				{
					header('location:index.php?page=home');	
				}
			}
			else if($row['status']=='unlike')
			{
			
				$sql = mysql_query("update `like_mul` set status='like' where mul_id='$mul_id' AND c_id='$c_id'");	
				if($sql)
				{
					header('location:index.php?page=home');	
				}
			}
		}
	}

	

?>