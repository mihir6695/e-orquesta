<?php
//print_r($_POST); exit;

if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	//$a_id = $_SESSION['s_id'];
	
	$name = $_POST['name'];
	$photo= $_FILES['photo']['name'];
	
		$video= $_FILES['video']['name'];
	$status= $_POST['status'];
	if($id=='')
	{
		move_uploaded_file($_FILES['photo']['tmp_name'],'upload/gallery_photo/'.$photo);
		$sql = mysql_query("INSERT INTO `gallery`(`photo`,`video`,`status` ) values('$photo','$video','$status')");	
			if($sql)
			{
				header('location:index.php?page=gallery_list');	
			}
			else
			{
			header('location:index.php?page=gallery_form');
			
			}
	}
	else
	{
		//update
		
			$query=mysql_query("UPDATE `gallery` set `video`='video',`status`='$status' where `id`='$id'");
			
			if($photo!='')
			{
		
				$select = mysql_query("select * from `gallery` where `id`='$id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/gallery_photo/'.$row['photo']);						                
				move_uploaded_file($_FILES['photo']['tmp_name'],'upload/gallery_photo/'.$photo);
				$sql2 = "update gallery set `photo`='$photo' where `id`='$id'";
				$result2=mysql_query($sql2);				
					
			}
			
			if($query || $result2)
			{
			header('location:index.php?page=gallery_list');
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
		
		mysql_query("DELETE FROM `gallery` where `id`='$id'");
		
		header('location:index.php?page=gallery_list');
		}
	

?>