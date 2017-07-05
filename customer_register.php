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
$c_id = $_SESSION['c_id'];
$sql = mysql_query("SELECT * FROM `custmore` where c_id='".$c_id."'");
$row = mysql_fetch_assoc($sql);
?>

<div class="main">	
	 <div class="project-wrapper">
	    <div class="wrap">
	 	  <div class="contact">
	 	  		<div class="cont span_2_of_contact">
	 	  		<h5 class="leave">Registration</h5><div class="clear"></div>	
				  <form method="post" action="index.php?page=custmore_register_action" enctype="multipart/form-data">
					<input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>" />
					<div class="contact-to">
                    <input type="text" required class="text" id="fname" name="first_name" value="<?php echo $row['first_name'];?>" placeholder="firstname..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'firstname...';}">
					
					<input type="text"  required class="text" id="mname"name="middle_name"value="<?php echo $row['middle_name'];?>" placeholder="middlename..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'middlename...';}" style="margin-left: 10px">
							
					<input type="text" required class="text"id="lname" name="last_name" value="<?php echo $row['last_name'];?>"   placeholder="lastname..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'lastname...';}" style="margin-left: 10px">
								
					<input type="email" required class="text" name="email" value="<?php echo $row['email'];?>" id="email"	placeholder="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
								
					<input type="password" class="text" id="pass"name="password" value="<?php echo $row['password'];?>"	placeholder="password..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password...';}" style="margin-left: 10px">
					
					<input type="text" class="text" name="phone_no"	value="<?php echo $row['phone_no'];?>"	placeholder="phoneno..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phoneno...';}"style="margin-left: 10px">
					<input type="text" class="text" name="city"	value="<?php echo $row['city'];?>"	placeholder="city..." >
					
</div></div><div class="clear"></div>		
						<div>
						<div class="">
					            <label class="">gender</label>
					            <div class="">
					              <label class="">
					                <input type="radio" name="gender" value="<?php echo $row['gender'];?>" id="optionsRadios1" value="male" checked="checked">male
					              </label>
								  
					              <label class="">
					                <input type="radio" name="gender" id="optionsRadios1" value="<?php echo $row['gender'];?>">female
					              </label>
					            </div>
					          </div>
							   <div class="contact-to">
                                <label class="control-label" for="fileInput">Profile</label>
                                <div class="controls">
                                  <input class="input-file" id="fileInput" name="profile" type="file">
                                  <img src="" height="50" />
                                </div>
                              </div>
						
				</div><div class="clear"></div>
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
     
  