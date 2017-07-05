<style>
@media (max-width: 480px)
.contact-to input[type="email"],input[type=password]
}
@media (max-width: 640px)
.contact-to input[type="email"],input[type=password] {
    width: 27.4%;
}
@media (max-width: 768px)
.contact-to input[type="email"],input[type=password] {
    width: 25.4%;
}
@media (max-width: 800px)
.contact-to input[type="email"],input[type=password] {
    width: 26.4%;
}
@media (max-width: 1024px)
.contact-to input[type="email"],input[type=password] {
    width: 27.4%;
}
@media (max-width: 1280px)
.contact-to input[type="email"],input[type=password] {
    width: 28.4%;
}
@media (max-width: 1366px)
.contact-to input[type="email"],input[type=password] {
    width: 28.4%;
}
.contact-to input[type="email"],input[type=password] {
    padding: 10px 10px;
    width: 29.4%;
    font-family: "Century Gothic",Arial, Helvetica, sans-serif;
    margin: 10px 0;
    border: 1px solid #E1E2E2;
    color: #000;
    background: #FFF;
    float: left;
    outline: none;
    font-size: 0.89em;
}
input[type=text],input[type="email"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>





<?php
include("include/config.php");
//session_start();

?><div class="">
<div class="about-middle">
		   	 <h4><span>LOGIN</span></h4>
		   	  </div>
</div>  
<div class="main" style="height:500px;">	
	 <div class="project-wrapper">
	    <div class="wrap">
	 	  <div class="contact">
	 	  		<div class="cont span_2_of_contact">	
				  <form method="post" action="index.php?page=login_action"onsubmit="return artist_form();">
					<div>
								<input type="radio" name="type" value="single_artist">single artist
								<input type="radio" name="type" value="mul_artist">Band
                                <input type="radio" name="type" value="customer">customer(user)
                         </div>
					<div class="contact-to">
                    <input type="email" class="text" id="email" name="email" placeholder="email"  required>
					
								
					<input type="password" class="text" name="password"id="pass" placeholder="password" minlength="6" onblur="if (this.value == '') {this.value = 'password...';}" style="margin-left: 10px" required>
					
					</div>
					
					
					<div>
	               		<input type="submit" class="submit" name="submit" value="submit">
	                </div>
				
	             </form>
				</div>

<div>
					<a href="index.php?page=register">
	               		<input type="submit" class="submit" name="register" value="register">
	                </a></div>			
			<div class="clear"></div>				
	</div>
	</div>
     </div>
	 
  </div>
  