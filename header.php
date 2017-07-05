<?php 
	session_start();
?>
<head>
<style>
.dropbtn {
    background-color:white;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color:yellow;}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style></head>
<section class="c-layout-revo-slider c-layout-revo-slider-7" dir="ltr">
             
<div class="header">	
      <div class="wrap">
	   <div class="logo">
				<a href="index.php?page=home"><img src="images/logo.png" height="100px" width="100px" alt=""/></a>
				</div>
			 <div class="cssmenu">
			  
	       
				<ul>
				
					<?php if(isset($_SESSION['type'])) { ?>
					<?php if(isset($_SESSION['s_id'])) { ?>
					 		
					<li><a href="index.php?page=home">home</a></li>
					<li><a href="index.php?page=feedback">Feed Back</a>  </li>
					<li><a href="index.php?page=likes_list">likes</a>  </li>
					<div class="dropdown">
  <button class="dropbtn">artists</button>
  <div class="dropdown-content">
    <a href="index.php?page=artist_cus_list_1">single</a>
    <a href="index.php?page=artist_cus_mul_list">multiple(band)</a>
  </div>
  
  </div>
  
  <div class="dropdown">
				<button class="dropbtn">album</button>
				<div class="dropdown-content">
				<a href="index.php?page=photo">photo</a>
				<a href="index.php?page=video">videos</a>
  </div>
</div>	
<li><a href="index.php?page=booking_notification">booking_notification</a></li>
					
					<li><a href="index.php?page=logout"><i class="fa fa-lock"></i>LogOut</a></li>
					<?php
						$sql = "SELECT * FROM `artist` WHERE `s_id` = ".$_SESSION['s_id'];
						$query = mysql_query($sql);
						$data = mysql_fetch_assoc($query);
					?>
					
					<li>
					<a href="index.php?page=artist_myprofile">
					<img src="<?php echo 'admin/upload/artist_profile/'.$data['profile']; ?>" style="height:60px; width:60px;"/>
					
					</a>					</li>


					<?php } else if (isset($_SESSION['mul_id'])) { ?>
					
					<li><a href="index.php?page=home">home</a></li>
					<li><a href="index.php?page=feedback">Feed Back</a>  </li>
		<div class="dropdown">
				<button class="dropbtn">artists</button>
				<div class="dropdown-content">
				<a href="index.php?page=artist_cus_list_1">single</a>
				<a href="index.php?page=artist_cus_mul_list">multiple(band)</a>
  </div>
</div>			
 <div class="dropdown">
				<button class="dropbtn">album</button>
				<div class="dropdown-content">
				<a href="index.php?page=photo">photo</a>
				<a href="index.php?page=video">videos</a>
  </div>
</div>
<li><a href="index.php?page=booking_mul_notification">booking_notification</a></li>

					<li><a href="index.php?page=logout"><i class="fa fa-lock"></i>LogOut</a></li>
						<?php
						$sql = "SELECT * FROM `artist_mul` WHERE `mul_id` = ".$_SESSION['mul_id'];
						$query = mysql_query($sql);
						$data = mysql_fetch_assoc($query);
					?><li>
					<a href="index.php?page=artist_mul_profile">
					<img src="<?php echo 'admin/upload/artist_mul_profile/'.$data['profile']; ?>" style="height:60px; width:60px;"/>
					</a></li>

					<li style="margin-top:5px;"><?php echo 'Wel-Come '.$_SESSION['group_name'];?></li>
					<?php } else if (isset($_SESSION['c_id'])) { ?>
				<li><a href="index.php?page=home">home</a></li>
					<li><a href="index.php?page=feedback">Feed Back</a>  </li>
								
						<div class="dropdown">
  <button class="dropbtn">single artists booking</button>
  <div class="dropdown-content">
    <a href="index.php?page=booking">book</a>
    <a href="index.php?page=booking_list">view booking</a>
  </div>
</div>					<div class="dropdown">
  <button class="dropbtn">band booking</button>
  <div class="dropdown-content">
    <a href="index.php?page=booking_mul">book</a>
    <a href="index.php?page=booking_mul_list">view booking</a>
  </div>
</div>					<div class="dropdown">
  <button class="dropbtn">artists</button>
  <div class="dropdown-content">
    <a href="index.php?page=artist_cus_list_1">single</a>
    <a href="index.php?page=artist_cus_mul_list">multiple(band)</a>
  </div>
</div>
 <div class="dropdown">
				<button class="dropbtn">album</button>
				<div class="dropdown-content">
				<a href="index.php?page=photo">photo</a>
				<a href="index.php?page=video">videos</a>
  </div>
</div>

<li><a href="index.php?page=logout"><i class="fa fa-lock"></i>LogOut</a></li>	
						
						
						<?php
						$sql = "SELECT * FROM `custmore` WHERE `c_id` = ".$_SESSION['c_id'];
						$query = mysql_query($sql);
						$data = mysql_fetch_assoc($query);
					?>
					<li>
					<a href="index.php?page=custmore_profile">
					<img src="<?php echo 'admin/upload/custmore_profile/'.$data['profile']; ?>" style="height:60px; width:60px;"/>
					</a>
					</li>

		
					<li style="margin-top:5px; color:blue;"><?php echo 'Wel-Come '.$_SESSION['first_name'];?></li>							
					<?php } } else { ?>
				
				
						
			<li><a href="index.php">home</a></li>
					
					<li><a href="index.php?#contact" class="page-scroll">Contact</a></li>
					<li><a href="1.php" class="page-scroll">portfolio</a></li>
					<li><a href="index.php?#register" class="page-scroll">register</a></li>
					<li><a href="index.php?#login" class="page-scroll">LogIn</a></li>
					
<?php } ?>
				</ul>
				
		     </div>
		    <div class="clear"></div>
	   </div>
   </div>
</section>
		<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
        <script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="assets/base/js/components.js" type="text/javascript"></script>
        <script src="assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="assets/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- BEGIN: PAGE SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                var slider = $('.c-layout-revo-slider .tp-banner');
                var cont = $('.c-layout-revo-slider .tp-banner-container');
                var api = slider.show().revolution(
                {
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    responsiveLevels: [2048, 1024, 778, 480],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [620, 768, 960, 720],
                    delay: 15000,
                    startwidth: 1170,
                    startheight: 620,
                    touchenabled: "on",
                    navigation:
                    {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        arrows:
                        {
                            style: "circle",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left:
                            {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right:
                            {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    spinner: "spinner2",
                    shadow: 0,
                    fullWidth: "off",
                    forceFullWidth: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "on",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "on",
                    hideArrowsOnMobile: "on",
                    hideThumbsUnderResolution: 0
                });
                api.bind("revolution.slide.onchange", function(e, data)
                {
                    $('.c-layout-header').removeClass('hide');
                    setTimeout(function()
                    {
                        $('.c-singup-form').fadeIn();
                    }, 1500);
                });
            }); //ready
        </script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-64667612-1', 'themehats.com');
  ga('send', 'pageview');
</script>




