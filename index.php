# e-orquesta
<?php
include('include/config.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Free Skokov Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="css/jquery.js"></script>
<script src="js/jquery-migrate.min.js"></script>
<script src="js/analytics.js"></script>
<script src="js/analytics1.js"></script>
<script src="js/jquery-migrate1.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/fonts/karla.css" rel="stylesheet" type="text/css">
<link href="css/fonts/roboto.css" rel="stylesheet" type="text/css">
	
	<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
				</script>

</head>
<body>

      <?php
						include('template/header.php');
						?>
<?php 
		$page = $_REQUEST['page'];
		if(basename($_SERVER['PHP_SELF'])=='index.php' && $page==''){
			$page = 'dashboard';	
		}
		if($page!='' && file_exists('middlepage/'.$page.'.php')){
			include('middlepage/'.$page.'.php');
		}else{
			include('middlepage/404.php');	
		}
?>	
<?php include("template/footer.php");?>
</body>
</html>
