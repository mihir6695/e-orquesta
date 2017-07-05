<?php
//print_r($_POST); exit;
if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	$m_id= $_SESSION['mul_id'];
	$photo= $_FILES['photo']['name'];
	$video= $_FILES['video']['name'];
	
	if($id=='')
	{
		move_uploaded_file($_FILES['photo']['tmp_name'],'admin/upload/gallery_photo_mul/'.$photo);
		move_uploaded_file($_FILES['video']['tmp_name'],'admin/upload/gallery_video_mul/'.$video);
		$sql = mysql_query("INSERT INTO `gallery_mul`(`m_id`,`photo`,`video`) values('$m_id','$photo','$video')");	
			if($sql)
			{
				header('location:index.php?page=artist_mul_profile');	
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
		
		mysql_query("DELETE FROM `gallery_mul` where `id`='$id'");
		
		header('location:index.php?page=artist_mul_profile');
		}
	
	
	
	?>