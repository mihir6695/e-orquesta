

<?php

if(isset($_POST['submit']))
{ 

$s_id=$_SESSION['s_id'];
$_SESSION['password']=$SESSION['password'];
	

 $sql= "UPDATE `artist` set `password`='$password' where `s_id`='$s_id' "; 
		 $query=mysql_query($sql);
		 if($query)
		 {
				header('location:index.php?&msg=Password Successfully Change!! Again Login!!');
				session_destroy();
		 }
		 else
		 {
				header('location:index.php?page=change_pass');
		 }	
		}

?>