<?php
//print_r($_POST); exit;

if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	
	$photo= $_FILES['photo']['name'];
	if($id=='')
	{
		move_uploaded_file($_FILES['photo']['tmp_name'],'upload/gallery_photo_mul/'.$photo);
		$sql = mysql_query("INSERT INTO `gallery_mul`(`photo`) values('$photo')");	
			if($sql)
			{
				header('location:index.php?page=gallery_mul_list');	
			}
			else
			{
			header('location:index.php?page=gallery_mul_form');
			
			}
	}
	else
	{
		//update
		
			$query=mysql_query("UPDATE `gallery_mul` set `photo`='photo' where `id`='$id'");
			
			if($photo!='')
			{
		
				$select = mysql_query("select * from `gallery_mul` where `id`='$id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/gallery_photo_mul/'.$row['photo']);						                
				move_uploaded_file($_FILES['photo']['tmp_name'],'upload/gallery_photo_mul/'.$photo);
				$sql2 = "update gallery_mul set `photo`='$photo' where `id`='$id'";
				$result2=mysql_query($sql2);				
					
			}
			
			if($query || $result2)
			{
			header('location:index.php?page=gallery_mul_list');
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
		
		mysql_query("DELETE FROM `gallery_mul` where `id`='$id'");
		
		header('location:index.php?page=gallery_mul_list');
		}
	

?>