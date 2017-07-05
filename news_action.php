<?php
//print_r($_POST); exit;

if(isset($_POST['submit']))
{	
	$news_id = $_POST['news_id'];
	$title = $_POST['title'];
	$upld_file= $_FILES['upld_file']['name'];
	$description= $_POST['description'];
	if($news_id=='')
	{
		move_uploaded_file($_FILES['upld_file']['tmp_name'],'upload/news_upld_file/'.$upld_file);
		$sql = mysql_query("INSERT INTO `news`(`title`,`upld_file`,`description` ) values('$title','$upld_file','$description')");
 //echo "INSERT INTO `news`(`title`,`upld_file`,`description` ) values('$title','$upld_file','$description')";exit;		
			if($sql)
			{
				header('location:index.php?page=news_list');	
			}
			else
			{
			header('location:index.php?page=news_form');
			
			}
	}
	else
	{
		//update
		
			$query=mysql_query("UPDATE `news` set `title`='$title',`upld_file`='$upld_file',`description`='$description' where `news_id`='$news_id'");
			
			if($upld_file!='')
			{
		
				$select = mysql_query("select * from `news` where `news_id`='$news_id'");													               
				$row=mysql_fetch_assoc($select);
				unlink('upload/news_upld_file/'.$row['upld_file']);						                
				move_uploaded_file($_FILES['upld_file']['tmp_name'],'upload/news_upld_file/'.$upld_file);
				$sql2 = "update news set `upld_file`='$upld_file' where `news_id`='$news_id'";
				$result2=mysql_query($sql2);				
					
			}
			
			if($query || $result2)
			{
			header('location:index.php?page=news_list');
			}
			else {
				echo "error";
			}
	}
	
	 
		}
		else
		{
			//delete
			$news_id = $_REQUEST['news_id'];
		
		mysql_query("DELETE FROM `news` where `news_id`='$news_id'");
		
		header('location:index.php?page=news_list');
		}
	

?>