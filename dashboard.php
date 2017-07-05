<style>



@media (max-width: 1366px)
.contact-to input[type="password"] {
    width: 28.4%;
}
.contact-to input[type=:"password"] {
    padding: 10px 10px;
    width: 29.4%;
    font-family: "Century Gothic",Arial, Helvetica, sans-serif;
    margin: 10px 0;
    color: #000;
    float: left;
    outline: none;
    font-size: 0.89em;
}
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>


<?php include("template/banner.php");?><div class="clear"></div>
<div style="background-image:url('images/h4.jpg');background-size:100%;">
<div class="content-middle" id="portfolio" style="background-color:rgba(0,0,0,0.2);">
	<h2><span>Our Artists</span></h2>
		<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
      --><div id="container">
        <div id="main1">
       <ul id="tiles">
        <!-- These are our grid blocks -->
        <li>
          <a href="images/1.jpg" rel="lightbox" class="cboxElement">
            <img src="images/1.jpg" width="200" height="283">
          </a>
        </li>
        <li>
          <a href="images/2.jpg" rel="lightbox" class="cboxElement">
            <img src="images/2.jpg" width="200" height="300">
          </a>
       </li>
        <li>
          <a href="images/3.jpg" rel="lightbox" class="cboxElement">
            <img src="images/3.jpg" width="200" height="252">
          </a>
       </li>
        <li>
          <a href="images/4.jpg" rel="lightbox" class="cboxElement">
            <img src="images/4.jpg" width="200" height="158">
          </a>
        </li>
        <li>
          <a href="images/5.jpg" rel="lightbox" class="cboxElement">
            <img src="images/5.jpg" width="200" height="265">
          </a>
       </li>
        <li>
          <a href="images/6.jpg" rel="lightbox" class="cboxElement">
            <img src="images/6.jpg" width="200" height="158">
          </a>
        </li>
        <li>
          <a href="images/7.jpg" rel="lightbox" class="cboxElement">
            <img src="images/7.jpg" width="200" height="200">
          </a>
        </li>
        <li>
          <a href="images/8.jpg" rel="lightbox" class="cboxElement">
            <img src="images/8.jpg" width="200" height="200">
          </a>
        </li>
        <li>
          <a href="images/9.jpg" rel="lightbox" class="cboxElement">
            <img src="images/9.jpg" width="200" height="133">
          </a>
        </li>
        <li>
          <a href="images/10.jpg" rel="lightbox" class="cboxElement">
            <img src="images/10.jpg" width="200" height="193">
          </a>
        </li>
        <li>
          <a href="images/11.jpg" rel="lightbox" class="cboxElement">
            <img src="images/11.jpg" width="200" height="283">
          </a>
       </li>
        <li>
          <a href="images/1.jpg" rel="lightbox" class="cboxElement">
            <img src="images/1.jpg" width="200" height="283">
          </a>
        </li>
        <li>
          <a href="images/2.jpg" rel="lightbox" class="cboxElement">
            <img src="images/2.jpg" width="200" height="300">
          </a>
       </li>
        <li>
          <a href="images/3.jpg" rel="lightbox" class="cboxElement">
            <img src="images/3.jpg" width="200" height="252">
          </a>
       </li>
        <li>
          <a href="images/4.jpg" rel="lightbox" class="cboxElement">
            <img src="images/4.jpg" width="200" height="158">
          </a>
        </li>
        <li>
          <a href="images/5.jpg" rel="lightbox" class="cboxElement">
            <img src="images/5.jpg" width="200" height="265">
          </a>
       </li>
        <li>
          <a href="images/6.jpg" rel="lightbox" class="cboxElement">
            <img src="images/6.jpg" width="200" height="158">
          </a>
        </li>
        <li>
          <a href="images/7.jpg" rel="lightbox" class="cboxElement">
            <img src="images/7.jpg" width="200" height="200">
          </a>
        </li>
        <li>
          <a href="images/8.jpg" rel="lightbox" class="cboxElement">
            <img src="images/8.jpg" width="200" height="200">
          </a>
        </li>
        <li>
          <a href="images/9.jpg" rel="lightbox" class="cboxElement">
            <img src="images/9.jpg" width="200" height="133">
          </a>
        </li>
        <li>
          <a href="images/10.jpg" rel="lightbox" class="cboxElement">
            <img src="images/10.jpg" width="200" height="193">
          </a>
        </li>
     </ul>
   </div> 
   <link rel="stylesheet" href="css/colorbox.css">
 
  <!-- Include the imagesLoaded plug-in -->
  <script src="js/jquery.imagesloaded.js"></script>
  <!-- include colorbox -->
  <script src="js/jquery.colorbox-min.js"></script>
  <!-- Include the plug-in -->
  <script src="js/jquery.wookmark.js"></script>
  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main1'), // Optional, used for some extra CSS styling
          offset: 2, // Optional, the distance between grid items
          itemWidth:200 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#tiles li');

        // Call the layout function.
        handler.wookmark(options);

        // Init lightbox
        $('a', handler).colorbox({
          rel: 'lightbox'
        });
      });
    })(jQuery);
  </script>

</div>

  <div class="" id="contact" style="">	
	 <div class="">
	  	  <div class="contact">
	 	  		<div class="cont span_2_of_contact" style="width:100%;">
	<br><br><br>	<h2><span>Send us message</span></h2>
				  <form method="post" action="index.php?page=contact_action" enctype="multipart/form-data">
				  
					<div class="contact-to">
                     	<input type="text" required class="text" name="name" id="name" value="<?php echo $row['name'] ?>" placeholder="Name....." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name...';}"required>
					 	<input type="text"  class="email" name="email" id="email" value="<?php echo $row['email'] ?>" placeholder=email....." required>
					 	
						<input type="text" class="text" name="subject" id="subject" value="<?php echo $row['subject']?>"placeholder="Subject....." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'subject...';}" style="margin-left: 10px" required>
					</div>
					<div class="text2">
	                   <textarea  class="text" required name="message" id="message"value="<?php echo$row['message']?>" placeholder="Message....." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'message';}required"></textarea>
	                </div>
	                <div>
	               		<input type="submit" style="color:yellow;background-color:black;" name="submit" value="SEND"></a>
	                </div>
	             </form>
				</div>
				
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  
<div class="" id="register">	
	 <div class="">
	 	<div class="wrap"style="width:100%;">
	 	  <div class="section group">
	<br><br><br>	<h2><span>Register here!!!</span></h2>
				
				<div class="clear"></div>				
		    </div>
		   
		   
		   <div class="team1" style="margin-left:23%;">
				<div class="col_1_of_about-grids span_1_of_about-grids" >
				<a class="popup-with-zoom-anim" href="#small-dialog2">
					<img src="images/in2.jpg" alt=""height="200px"/>	
					<h3><a href="index.php?page=artist_register">artist</a></h3>
				</a>
				</div>
				<div class="col_1_of_about-grids span_1_of_about-grids">
				<a class="popup-with-zoom-anim" href="#small-dialog2">	
					<img src="images/in.jpg" alt=""height="200px"/>
					<h3><a href="index.php?page=artist_mul_register">band</a></h3>
				
				</a>
				</div>
				<div class="col_1_of_about-grids span_1_of_about-grids">
				<a class="popup-with-zoom-anim" href="#small-dialog2">
					<img src="images/h4.jpg" alt=""height="200px"/>
					<h3><a href="index.php?page=customer_register">user</a></h3>
					</a>
				</div>
				<div class="clear"></div>
			</div>
			
				<div class="clear"></div>
			</div>
		 </div>
     </div>	
	 <div class="" id="login" style="">	
	 <div class="">
	  	  <div class="contact" >
	 	  		<div class="cont span_2_of_contact" style="width:100%;">
	<br><br><br>	<h2><span>LogIn</span></h2>
				  <form class="form-inline" style="margin-left:35%;" method="post" action="index.php?page=login_action">
						<span class="c-theme-font c-font-bold">	
						<div style="font-size:30px;color:#5893dd;">
								<input type="radio" name="type" value="single_artist">single artist
								<input type="radio" name="type" value="mul_artist">Band
                                <input type="radio" name="type" value="customer">customer(user)
                         </div>
</span>                 
					<div class="c-singup-form">     	
					<input type="email" class="form-control c-bg-transparent input-lg c-theme c-square " name="email" placeholder="email" style="background-color:white;color:blue;" required> 
                       <br>
                                <input type="password" class="form-control c-bg-transparent input-lg c-theme c-square " name="password" style="background-color:white;color:blue;" placeholder="password" minlength="6" required> 
                      
							</div>
	                <div>
	               		<input type="submit" style="color:yellow;background-color:black;" name="submit" value="submit"></a>
	                </div>
	             </form>
				</div>
				
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  
  </div></div>