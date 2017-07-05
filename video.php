<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
<div class="project-list">
	 	 <div class="search_box">
			<form>
				<input type="text" value="Search...." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="">
			</form>
		 </div>
		</div>
<div>
	<div>	
	<marquee behavior="scroll" direction="left" scrollamount="17"    style="background-image: url('images/h4.jpg');background-size:100%;" onmouseover="this.stop();"  onmouseout="this.start();">
		
				<?php
							$sql = mysql_query("SELECT * FROM `gallery`");
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<ul style="">

<?php									
									$video=$row['video'];
									if($video!='')
									{
										
								
									?>
									
									
									
									
									 <li style="width:33%;height:300px;float:left;">
									 <video  src="<?php echo 'admin/upload/gallery_video/'.$row['video'];?>" controls="controls" style="height:250px;width:80%;margin:0px 25px;float:left;" autoplay></video> 
																			</li>
									 <?php } ?>
									 <?php } ?>
									
									
		
		<?php
							$sql = mysql_query("SELECT * FROM `gallery_mul`");
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<ul>

<?php					
									$video=$row['video'];
									if($video!='')
									{
										
								
									?>
									
									
									
									
									 <li style="width:33%;height:300px;float:left;">
									 <video  src="<?php echo 'admin/upload/gallery_video_mul/'.$row['video'];?>" controls="controls" style="height:250px;width:80%;margin:0px 25px;" autoplay></video> 
														</li>
									 <?php } ?>
									
									
																		
									
								</ul>
								
                          
				
				<?php } ?>			
                          
			</marquee>	
			</div>				
	
			
		
														
			<div class="clear"> </div>
	</div>