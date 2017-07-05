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
$mul_id = $_GET['mul_id'];
$sql = mysql_query("SELECT * FROM `artist_mul` where mul_id='".$mul_id."'");
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
				<form method="post" action="index.php?page=booking_mul_action" enctype="multipart/form-data">
				<?php
				$c=$_SESSION['c_id'];
?>							
					<input type="hidden" name="c_id" value="<?php echo $c?>"/>
					<div class="contact-to">
                    <input type="text" class="text" name="fees"value="<?php echo $row1['fees'];?>"	placeholder="fees...">
					 <input type="hidden" class="text" name="mul_id"value="<?php echo $row1['mul_id'];?>"	placeholder="fees...">
<?php
							$janki=$_SESSION['first_name'];
							$janki1=$_SESSION['email'];
?>					<input type="text" class="text" id="name" name="first_name" value="<?php echo $janki;?>" placeholder="name..." }">
					
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
							<div class="contact-to">
                               
                              </div>
					</div>
				
	                <div>
	               		<input type="submit" class="submit" name="submit" value="submit">
	                </div>
	             </form>
				</div>
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  </div>