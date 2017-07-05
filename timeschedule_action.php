<?php
//print_r($_POST); exit;

if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	$description = $_POST['description'];
	$status= $_POST['status'];
	if($id=='')
	{
		$sql = mysql_query("INSERT INTO `timeschedule`(`description`,`status` ) values('$description','$status')");	
			if($sql)
			{
				header('location:index.php?page=timeschedule_list');	
			}
			else
			{
			header('location:index.php?page=timeschedule_form');
			
			}
	}
	else
	{
		//update
		
			$query=mysql_query("UPDATE `timeschedule` set `description`='$description',`status`='$status' where `id`='$id'");
			
			
			if($query)
			{
			header('location:index.php?page=timeschedule_list');
			}
			else {
				echo "error";
			}
	}
	
	 
		}
		else
		{
			//delete
			$id = $_REQUEST['id'];
		
		mysql_query("DELETE FROM `timeschedule` where `id`='$id'");
		
		header('location:index.php?page=timeschedule_list');
		}
	

?>