<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?> <?php
$feed_id = $_GET['feed_id'];
$sql = mysql_query("SELECT * FROM `feedback` where feed_id='".$feed_id."'");
$row = mysql_fetch_assoc($sql);
?>
<div class="project-list">
	 	 <div class="search_box">
			<form method="post" action="index.php?page=search_action">
				<input type="text" value="" name="first_name" placeholder="search" >
				<input type="submit" name="submit" value="serch">
			</form>
			<?php
		?>
	</div>

	 <div class="project-wrapper" style="">
<div class="about-middle">
		   	 <h4><span>FEEDBACK</span></h4>
		   	 
</div>
  <div class="main">	
	 	    <div class="wrap">
	 	  <div class="contact">
	 	  		<div class="cont span_2_of_contact">
				<div class="clear"></div>	
				  <form method="post" action="index.php?page=feedback_action" enctype="multipart/form-data">
				 <?php $c=$_SESSION['c_id'];?>
					<input type="hidden" name="c_id" value="<?php echo $c?>" />
					
					<div class="contact-to">
                     	<input type="text" class="text" name="name"  id="name" value="<?php echo $row['name'];  ?>" placeholder="name..." >
					 	<input type="text" class="text" name="email" id="email" value="<?php echo $row['email']; ?>" placeholder="Email..."  required style="magin-left: 10px">
					 	<input type="text" class="text" name="subject" id="subject" value="<?php echo $row['subject']; ?>" placeholder="Subject..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'subject...';}" style="margin-left: 10px">
					
					
					</div>
					<div class="text2">
	                   <textarea   class="text" name="message" id="message" value="<?php echo $row['message']; ?>" placeholder="Message..."required></textarea>
	                </div>
	                <div>
	               		<input 	type="submit" name="submit" value="submit">Send a Message</a>
	                </div>
	             </form>
				</div>
				
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  </div>