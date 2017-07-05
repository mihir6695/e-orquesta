<?php
//session_start();
error_reporting(0);
ob_start();
$con=mysql_connect('localhost','root','');
if($con)
{
	$db=mysql_select_db('project1',$con);
}
?>


