<?php
error_reporting(0);
ob_start();
$con = mysql_connect('localhost','root','');

if($con)
{
	$db= mysql_select_db('project1',$con);
}
define('SITE_NAME','project1/');
define('SITE_URL','http://'.$_SERVER['HTTP_HOST'].'/'.SITE_NAME);
define('SITE_PATH',$_SERVER['DOCUMENT_ROOT'].'/'.SITE_NAME);

function getStateName($state_id){
	$sql = mysql_query("select * from state where state_id='$state_id'");
	$row = mysql_fetch_assoc($sql);
	return $row['state_name'];
}

function displayErrSucMsg(){
	if($_SESSION['sucMsg']!=''){
		echo '<div class="alert alert-success">'.$_SESSION['sucMsg'].'</div>';
		unset($_SESSION['sucMsg']);
	}elseif($_SESSION['errMsg']!=''){
		echo '<div class="alert alert-danger">'.$_SESSION['errMsg'].'</div>';
		unset($_SESSION['errMsg']);
	}
}
?>


