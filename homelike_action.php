<?php
$s_id = $_GET['s_id'];
$sql = mysql_query("SELECT * FROM `artist` where s_id='".$s_id."'");
$row = mysql_fetch_assoc($sql);
$like=$row['like'];
$total=$like+1;
$query=mysql_query("UPDATE `artist` set `like`='$total' where `s_id`='$s_id'");
if($query)
{
	header('location:index.php?page=home');
}
?>