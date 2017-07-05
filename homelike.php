<div class="project-list">
	 	 <div class="search_box">
			<form>
				<input type="text" value="Search...." placeholder="search" >
				<input type="submit" value="">
			</form>
		 </div>
		</div>
	<div class="main" align="center">	
	<h4 style="font-family:kerla;font-size:45px;color:red;">
	<?php echo 'Wel-Come '.$_SESSION['first_name'];?></li>
						</h4>
	 <div class="project-wrapper">
	   <div class="project">
	    <div class="">
			<div class="blog-img">
				
				 <div class="" style="color:black;font-size:25px;margin-right:10%;width:100%;">
			
			
			<?php
			
							$sql = mysql_query("SELECT * FROM `gallery` where photo!=''");
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
							
								
							<?php
							$sql1=mysql_query("select * from artist where s_id = '".$row['a_id']."'");
							$sql2=mysql_fetch_assoc($sql1);
							?>			
				<a href="index.php?page=artist_myprofile_cus&s_id=<?php echo $sql2['s_id']; ?>" >
							
					<?php 		echo 'upld By: '.$sql2['first_name'];
					?>	
		
				</a>						<tr class="even gradeC">
										
											
                   <td>
							<?php if($row['photo']!=NULL) {?>
							<img src="<?php echo 'admin/upload/gallery_photo/'.$row['photo'];?>"  width="50%" height="50%" style="margin-left:15px;"/><?php } ?>									</td> 
								</tr>
								<div class="comment">
				<a href="index.php?page=like_action&s_id=<?php echo $sql2['s_id']; ?>" >
		
								<span class=""><img src="web/images/b-heart.png" title="likes" style="height:10%;width:10%;" alt=""/>
									
<?php
$s_id = $_GET['s_id'];
$sql1 = mysql_query("SELECT * FROM `artist` where s_id='".$row['a_id']."'");
$row1 = mysql_fetch_assoc($sql1);
echo $like=$row1['like'];

?>
								
								
								</span></a>
						
						
						
						<div class="clear"></div>
					</div>
			
                            <?php } ?>
		
	    </div>
		
			</div>
		
			
	    </div>
		<div class="">
		<div class="blog-bg"><div class="clear"></div>
			</div>	<div class="blog-img">
				<a href="">
					 <div class="" style="color:black;font-size:25px;margin-right:10%;width:100%;">
			
			
			<?php
			
							
							$sql = mysql_query("SELECT * FROM `gallery_mul` where photo!=''");            
			while($row = mysql_fetch_assoc($sql))
							{
							?>
							
							<?php
							$sql1=mysql_query("select * from artist_mul where mul_id = '".$row['m_id']."'");
							$sql2=mysql_fetch_assoc($sql1);
				?>
				<a href="index.php?page=artist_mul_profile_cus&mul_id=<?php echo $sql2['mul_id']; ?>" >
				<?php			
							echo 'upld By (band): '.$sql2['group_name'];
							?>
					</a>			
								<tr class="even gradeC">
										
											
                   <td>
							<?php if($row['photo']!=NULL) {?>
							<img src="<?php echo 'admin/upload/gallery_photo_mul/'.$row['photo'];?>"  width="50%" height="50%" style="margin-left:15px;"/><?php }else{?>
						<img src="img/avatar.jpg">
										<?php } ?>
									</td> 
								</tr>
								<div class="comment">
				
	<span class="icon">
					
						<img src="web/images/b-heart.png" title="likes" alt=""/>15</span>
						<div class="clear"></div>
					</div>
			
                            <?php } ?>
		
	    </div>
			</div>
		    
			
			
		</div>
	   <div class="clear"></div>
	   <ul class="dc_pagination dc_paginationA dc_paginationA06">
		    <li><a href="#" class="previous">Previous</a></li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#" class="current">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a href="#">...</a></li>
		    <li><a href="#">19</a></li>
		    <li><a href="#">20</a></li>
		    <li><a href="#" class="next">Next</a></li>
	   </ul>
	 </div>
	 <div class="project-sidebar">
	 	
		
		
		 <div class="project-list1">
	     	<h4>Popular Posts</h4>
			<ul>
				<li><img src="web/images/list-img.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="web/images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
				<li><img src="web/images/list-img1.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="web/images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
				<li><img src="web/images/list-img2.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="web/images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
				<li><img src="web/images/list-img4.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="web/images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
				<li><img src="web/images/list-img5.jpg" alt=""><p><a href="#">Lorem ipsum dolor sit amet, consectetuer</a></p>
					<span class="likes"><span class="link"><a href="#">Dec 14, 2013</a></span><a href="#"><img src="web/images/heart.png" title="likes" alt=""/></a>16</span><div class="clear"></div>
				</li>
			</ul>
		 </div>
		 
	 </div>
	 <div class="clear"></div>
  </div>
   		
             		
      	   		                                                                                            