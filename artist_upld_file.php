<?php
//print_r($_POST); exit;

if(isset($_POST['submit']))
{	
	$id = $_POST['id'];
	
	$upld_file= $_FILES['upld_file']['name'];
	if($id=='')
	{
		move_uploaded_file($_FILES['upld_file']['tmp_name'],'upload/artist_upld_file/'.$upld_file);
		$sql = mysql_query("INSERT INTO `gallery`(`upld_file`) values('$upld_file')");	
			if($sql)
			{
				header('location:index.php?page=gallery_list');	
			}
			else
			{
			header('location:index.php?page=gallery_list');
			
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