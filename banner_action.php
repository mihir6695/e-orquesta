<?php
//print_r($_POST); exit;

if(isset($_POST['submit']))
{	
	$ban_id = $_POST['ban_id'];
	$name = $_POST['name'];
	$title = $_POST['title'];
	$upld_file	= $_FILES['upld_file']['name'];
	if($ban_id=='')
	{
		move_uploaded_file($_FILES['upld_file']['tmp_name'],'upload/banner_upld_file/'.$upld_file	);
		$sql = mysql_query("INSERT INTO `banner`(`name`,`title`,`upld_file`) values('$name','$title','$upld_file')");	
			if($sql)
			{
				header('location:index.php?page=banner_list');	
			}
			else
			{
			header('location:index.php?page=banner_form');
			
			}
	}
	else
	{
		//update
		
			$query=mysql_query("UPDATE `banner` set `name`='$name',`title`='$title' where `ban_id`='$ban_id'");
			
			if($upld_file	!='')
			{
		
				$select = mysql_query("select * from `banner` where `ban_id`='$ban_id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/banner_upld_file	/'.$row['upld_file	']);						                
				move_uploaded_file($_FILES['upld_file']['tmp_name'],'upload/banner_upld_file/'.$upld_file	);
				$sql2 = "update banner set `upld_file`='$upld_file' where `ban_id`='$ban_id'";
				$result2=mysql_query($sql2);				
					
			}
			
			if($query || $result2)
			{
			header('location:index.php?page=banner_list');
			}
			else {
				echo "error";
			}
	}
	
	 
		}
		else
		{
			//delete
			$ban_id = $_REQUEST['ban_id'];
		
		mysql_query("DELETE FROM `banner` where `ban_id`='$ban_id'");
		
		header('location:index.php?page=banner_list');
		}
	

?>