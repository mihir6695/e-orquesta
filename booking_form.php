<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
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
$s_id = $_GET['s_id'];
$sql = mysql_query("SELECT * FROM `artist` where s_id='".$s_id."'");
$row1 = mysql_fetch_assoc($sql);
?>
<?php
if($_SESSION['c_id']==NULL)
{
	header('location:index.php?page=login');
	
}
?> 

<div class="main">
<div class="banner">
      	<div class="wrap">
      	     <h2 style="font-size:15px;">booking_form</h2><div class="clear"></div>
      	</div>
    </div>
	
	 <div class="project-wrapper">
	    <div class="wrap">
	 	  <div class="contact">
	 	  		<div class="cont span_2_of_contact">	
				<form method="post" action="index.php?page=booking_action" enctype="multipart/form-data">
				<?php
				$c=$_SESSION['c_id'];
?>							
					<input type="hidden" name="c_id" value="<?php echo $c?>"/>
					<div class="contact-to">
                    <input type="text" class="text" name="fees"value="<?php echo $row1['fees'];?>"	placeholder="fees...">
					 <input type="hidden" class="text" name="s_id"value="<?php echo $row1['s_id'];?>"	placeholder="fees...">
<?php
							$janki=$_SESSION['first_name'];
							$janki1=$_SESSION['email'];
?>					<input type="text" class="text" id="name" name="name" value="<?php echo $janki;?>" placeholder="name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'firstname...';}">
					
					<input type="email" class="text" name="email" value="<?php echo $janki1;?>" id="email"	placeholder="Email..."  onblur="if (this.value == '') {this.value = 'Email...';}" required>
								
					<input type="time" class="text" name="starttime" value="<?php echo $row['starttime'];?>" required>
					<input type="time" class="text" name="endtime" value="<?php echo $row['endtime'];?>"	required >
					<input type="date" class="text" name="date" value="<?php echo $row['date'];?>" required >
					 
					<input type="number" class="text" name="phone_no"	value="<?php echo $row['phone_no'];?>"	placeholder="phoneno..."
					required>
					<input type="text" placeholder="address" name="address"
							required>
							
							<input type="text" placeholder="city" name="city" required>
							<input type="text" placeholder="state" name="state" required>
							<input type="text" placeholder="contry" name="contry"
							required>
							<div class="contact-to">
                               
                              </div>
							   <!--<div class="contact-to">
                                <label class="control-label" for="fileInput">upld_file</label>
                                <div class="controls">
                                  <input class="input-file" id="fileInput" name="upld_file" type="file">
                                  <img src="" height="50" />
                                </div>
                              </div>-->
							  
					
					</div>
				
	                <div>
	               		<input type="submit" class="submit" name="submit" value="submit">
	                </div>
	             </form>
				</div>
				<!--<div class="lsidebar span_1_of_about">
				   <h5 class="leave">Contact Info</h5><div class="clear"></div>
				   <div class="contact-list">
						<ul>
							<li><img src="images/address.png" alt=""><p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh</p><div class="clear"></div></li>
							<li><img src="images/phone.png" alt=""><p>Phone: +1 800 258 2689<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1 800 258 2689 </p><div class="clear"></div></li>
							<li><img src="images/msg.png" alt=""><p>Email: <span class="yellow1"><a href="#">info(at)skokov.com</a></span></p><div class="clear"></div></li>
					   </ul>
					</div>
			    </div>-->
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  </div>