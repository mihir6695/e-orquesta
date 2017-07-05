
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Skokov Website Template | About :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Add fancyBox main JS and CSS files -->
<script src="web/js/jquery.min.js"></script>
<script src="web/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="web/css/magnific-popup.css" rel="stylesheet" type="text/css">
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


  <div class="main">	
  
<div class="about-middle">
		   	 <h4><span>Artists</span></h4>
		   	  </div>
<div class="project-list">
	 	 <div class="search_box">
			<form method="post" action="index.php?page=search_action">
				<input type="text" value="" name="first_name" placeholder="search" >
				<input type="submit" name="submit" value="serch">
			</form>
			<?php
		?>
		 </div>
		</div>
	 <div class="project-wrapper">
	 	<div class="wrap">
	 	 

							
		   <div class="team1">
		   		
		   <?php
							
							
							$sql = mysql_query("SELECT * FROM `artist`");
								
                            while($row = mysql_fetch_array($sql))
							{
							?>
				<div class="col_1_of_about-grids span_1_of_about-grids"	>
		
						
							
							
							
						<a href="index.php?page=artist_myprofile_cus&s_id=<?php echo $row['s_id']; ?>" >
						<?php if($row['profile']!=NULL) {?>
											<img src="<?php echo 'admin/upload/artist_profile/'.$row['profile'];?>" style="width:600px; height:200px;"/><?php }?>
											<h3><?Php echo $row['first_name']?></h3>
							                           
						</a>
					
				</div>
			
			 <?php } ?>
						
			
				<div class="clear"></div>
			</div>
			
		 </div>
     </div>
  </div>	
</body>
</html>
</html>