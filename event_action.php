<?php
//print_r($_POST); exit;

if(isset($_POST['submit']))
{	
	$event_id = $_POST['event_id'];
	$image= $_FILES['image']['name'];
	$location= $_POST['location'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$description=$_POST['description'];
	$endtime=$_POST['endtime'];
	if($event_id=='')
	{
		move_uploaded_file($_FILES['image']['tmp_name'],'upload/event_image/'.$image);
		$sql = mysql_query("INSERT INTO `event`(`image`,`location`,`date`,`time`,`description`,`endtime`) values('$image','$location','$date','$time','$description','$endtime')");	
			if($sql)
			{
				header('location:index.php?page=event_list');	
			}
			else
			{
			header('location:index.php?page=event_form');
			
			}
	}
	else
	{
		//update
		
			$query=mysql_query("UPDATE `event` set `image`='$image',`location`='$location',`date`='$date',`time`='$time',`description`='$description',`endtime`='$endtime' where `event_id`='$event_id'");
			
			if($image!='')
			{
		
				$select = mysql_query("select * from `event` where `event_id`='$event_id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/event_image/'.$row['image']);						                
				move_uploaded_file($_FILES['image']['tmp_name'],'upload/event_image/'.$image);
				$sql2 = "update event set `image`='$image' where `event_id`='$event_id'";
				$result2=mysql_query($sql2);				
					
			}
			
			if($query || $result2)
			{
			header('location:index.php?page=event_list');
			}
			else {
				echo "error";
			}
	}
	
	 
		}
		else
		{
			//delete
			$event_id = $_REQUEST['event_id'];
		
		mysql_query("DELETE FROM `event` where `event_id`='$event_id'");
		
		header('location:index.php?page=event_list');
		}
	

?>