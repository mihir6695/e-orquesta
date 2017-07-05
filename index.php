<?php
include('include/config.php');
session_start();
if($_SESSION['id']==NULL)
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard | Slate Admin 2.0</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap-overrides.css" rel="stylesheet">

<link href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<link href="js/plugins/datatables/DT_bootstrap.css" rel="stylesheet">
<link href="js/plugins/responsive-tables/responsive-tables.css" rel="stylesheet"> 

<link href="css/slate.css" rel="stylesheet">
<link href="css/slate-responsive.css" rel="stylesheet"> 


<!-- Javascript -->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/plugins/datatables/jquery.dataTables.js"></script>
<script src="js/plugins/datatables/DT_bootstrap.js"></script>
<script src="js/plugins/responsive-tables/responsive-tables.js"></script>

<script src="js/Slate.js"></script>

<script src="js/demos/demo.tables.js"></script>
<script src="js/validation.js"></script>


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>
<?php
/*if($_SESSION['id']==''){ 
	header('location:middlepage/login.php');
}else{*/
?>  	
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>

<div id="content">
		
	<?php
		$page = $_REQUEST['page'];
		if(basename($_SERVER['PHP_SELF'])=='index.php' && $page==''){
			$page = 'dashboard';	
		}
		if($page!='' && file_exists('middlepage/'.$page.'.php')){
			include('middlepage/'.$page.'.php');
		}
	?>	
	
</div> <!-- /#content -->

<?php include('template/footer.php'); ?>
<?php //} ?>
  </body>
</html>
