<?php
$contact_id = $_SESSION['contact_id'];
$sql = mysql_query("SELECT * FROM `contact` where contact_id='".$contact_id."'");
$row = mysql_fetch_assoc($sql);
?>

  <div class="main">	
	 <div class="project-wrapper">
	  	  <div class="contact">
	 	  		<div class="cont span_2_of_contact">
	 	  		<h5 class="leave">Send Us A Message</h5><div class="clear"></div>	
				  <form method="post" action="index.php?page=contact_action" enctype="multipart/form-data">
				  
					<div class="contact-to">
                     	<input type="text" class="text" name="name" id="name" value="<?php echo $row['name'] ?>" placeholder="Name....." >
                     	<input type="email" class="email" name="email" id="email" value="<?php echo $row['email'] ?>" placeholder=email....." required>
					 	<input type="text" class="text" name="subject" id="subject" value="<?php echo $row['subject']?>"placeholder="Subject....." required>
					</div>
					<div class="text2">
	                   <textarea  class="text" name="message" id="message"value="<?php echo$row['message']?>" placeholder="Message....." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'message';}required"></textarea>
	                </div>
	                <div>
	               		<input type="submit" name="submit" value="submit">Send a Message</a>
	                </div>
	             </form>
				</div>
				<div class="lsidebar span_1_of_about">
				   <h5 class="leave">Contact Info</h5><div class="clear"></div>
				   <div class="contact-list">
						<ul>
							<li><img src="images/address.png" alt=""><p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh</p><div class="clear"></div></li>
							<li><img src="images/phone.png" alt=""><p>Phone: +1 800 258 2689<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1 800 258 2689 </p><div class="clear"></div></li>
							<li><img src="images/msg.png" alt=""><p>Email: <span class="yellow1"><a href="#">info(at)skokov.com</a></span></p><div class="clear"></div></li>
					   </ul>
					</div>
			    </div>
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  </div>