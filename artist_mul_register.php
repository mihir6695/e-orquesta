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
.contact-to input[type="email"],input[type=password],input[type="number"],input[type="date"],input[type="time"],input[type="address"] {
    width: 28.4%;
}
@media (max-width: 1366px)
.contact-to input[type="email"],input[type=password],input[type="number"],input[type="date"],input[type="time"],input[type="address"] {
    width: 28.4%;
}
.contact-to input[type="email"],input[type=password],input[type="number"] ,input[type="date"],input[type="time"],input[type="address"]{
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
</style>

<?php	
$mul_id = $_SESSION['mul_id'];
$sql = mysql_query("SELECT * FROM `artist_mul` where mul_id='".$mul_id."'");
$row = mysql_fetch_assoc($sql);
?>
<div class="main">	
	 <div class="project-wrapper">
	    <div class="wrap">
	 	  <div class="contact">
	 	  		<div class="cont span_2_of_contact">
	 	  		<h5 class="leave">Registration</h5><div class="clear"></div>	
				  <form method="post" action="index.php?page=artist_mul_register_action"	 enctype="multipart/form-data">
					<input type="hidden" name="mul_id" value="<?php echo $row['mul_id']; ?>" />
					<div class="contact-to">
                    <input type="text" class="text" id="gname" required name="group_name" value="<?php echo $row['group_name'];?>" placeholder="group_name...">
					
							
					<input type="email" required style="margin-left: 10px" class="text" name="email" value="<?php echo $row['email'];?>" id="email"	placeholder="Email..." >
									
					<input type="password" required minlength="6" style="margin-left: 10px" class="text"style="color:black;" placeholder="password" name="password" value="<?php echo $row['password'];?>">
					<input type="text" class="text" name="phoneno"	value="<?php echo $row['phoneno'];?>"	placeholder="phoneno..." >
					<input type="text" class="text" name="group_member" style="margin-left: 10px" value="<?php echo $row['group_member'];?>"	placeholder="group_member..." required >
					<input type="text" class="text" name="city"value="<?php echo $row['city'];?>"	style="margin-left: 10px"placeholder="city..." >

<div class="clear"></div>
<div>								
						<input type="text" required class="text" name="fees"value="<?php echo $row['fees'];?>"	placeholder="fees..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'fees...';}">
							  		  <?php if(isset($_SESSION['mul_id'])) { ?>
			<input type="date" class="text" name="date" value="<?php echo $row['date'];?>" id="date"	placeholder="date...">
           <?php } ?>
							
							   <div class="contact-to" style="margin-left: 10px">
                                <label class="control-label	" for="fileInput">Profile</label>
                                <div class="controls">
								<input type="hidden" name="old_profile"	value="<?php echo $row['profile']; ?>">	
                                  <input class="input-file" id="fileInput" name="profile" type="file">
                                  <img src="" height="50" />
                                </div>
                              </div>
					
					</div>
				</div>		</div>
					
	                <div class="clear"></div>
	               		<input type="submit" class="submit" name="submit" value="submit">
	                
	             </form>
				
			
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  </div>	