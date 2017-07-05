<?php
//print_r($_POST); exit;
$like_id = $_POST['like_id'];
	$s_id = $_GET['s_id'];
	$c_id = $_SESSION['c_id'];
	$status=$_POST['status'];
	if($like_id=='')
	{	
		$sql1 = mysql_query("select * from `like` where s_id='$s_id' AND c_id='$c_id'");
		$count=mysql_num_rows($sql1);
		
		if($count<=0)
		{
			
			$sql = mysql_query("INSERT INTO `like` (`s_id`,`c_id`,`status` ) values('$s_id','$c_id','like')");	
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
				$sql = mysql_query("update `like` SET status='unlike' where s_id='$s_id' AND c_id='$c_id'");	
				if($sql)
				{
					header('location:index.php?page=home');	
				}
			}
			else if($row['status']=='unlike')
			{
			
				$sql = mysql_query("update `like` set status='like' where s_id='$s_id' AND c_id='$c_id'");	
				if($sql)
				{
					header('location:index.php?page=home');	
				}
			}
		}
	}

	

?>`