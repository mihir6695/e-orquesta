<?php
if(isset($_POST['submit'])){

	$state_id = $_POST['state_id'];
	$city_name = $_POST['city_name'];
	
	$sql = "insert into city(state_id,city_name) values('$state_id','$city_name')";
	$result = mysql_query($sql);
	if($result){
		header('location:index.php?page=city_list');	
	}else{
		header('location:index.php?page=city_form');
	}
	
}

?>