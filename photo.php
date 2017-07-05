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
<div style="background-image: url('images/h4.jpg');background-size:100%;"">
	<div>			
				
			
		
		<?php
							$sql = mysql_query("SELECT * FROM `gallery`");
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<ul class="even gradeC">

<?php									
									$photo=$row['photo'];
									if($photo!='')
									{
										
								
									?>
									
									
									
									
									 <li style="width:33%;height:300px;float:left;">
									 <img  src="<?php echo 'admin/upload/gallery_photo/'.$row['photo'];?>" controls="controls" style="height:250px;width:80%;margin:0px 25px;border-radius:100px;"></photo> 
																			</li>
									 <?php } ?>
				
				<?php } ?>	<?php
							$sql1 = mysql_query("SELECT * FROM `gallery_mul`");
                            while($row1 = mysql_fetch_assoc($sql1))
							{
							?>
								<ul class="even gradeC">

<?php									
									$photo=$row1['photo'];
									if($photo!='')
									{
										
								
									?>
									
									
									
									
									 <li style="width:33%;height:300px;float:left;">
									 <img  src="<?php echo 'admin/upload/gallery_photo_mul/'.$row1['photo'];?>" controls="controls" style="height:250px;width:80%;margin:0px 25px;border-radius:100px;"></photo> 
																			</li>
									 <?php } ?>
									
									
									
									
								</ul>
				<?php } ?>				
                          
				
			</div>				
	
			
		
														
			<div class="clear"> </div>
	</div>