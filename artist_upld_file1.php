<?php
//print_r($_POST); exit;
if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	$v_id= $_SESSION['s_id'];
	$video= $_FILES['video']['name'];
	if($id=='')
	{
		move_uploaded_file($_FILES['video']['tmp_name'],'admin/upload/gallery_video/'.$video);
		
		$sql = mysql_query("INSERT INTO `gallery`(`v_id`,`video`) values('$v_id','$video')");	
			if($sql)
			{
				header('location:index.php?page=artist_myprofile');	
			}
			else
			{
			header('location:index.php?page=gallery_form');
			
			}
	}
	
	 
		}
		else
		{
			//delete
			$id = $_REQUEST['id'];
		
		mysql_query("DELETE FROM `gallery` where `id`='$id'");
		
		header('location:index.php?page=artist_myprofile');
		}
	

?>