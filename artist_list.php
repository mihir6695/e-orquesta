<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>

<div class="main">
	 <div class="project-wrapper">
		    
	    <div class="wrap">
	      		
	 	  <div class="contact">
						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							<h4 style="color:blue; font-size:50px;"><center>artists</center></h4>							
						</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<table class="table table-striped table-bordered table-highlight" id="example">
							<thead>
								<tr>
									<th style="color:#F0F">first_name</th>
									<th style="color:#F0F">last_name</th>
									<th style="color:#F0F">Email</th>
                                    <th style="color:#F0F">city</th>
                                    <th style="color:#F0F">Profile</th>
									<th style="color:#F0F">fees</th>
									<th style="color:#F0F">book</th>
									
								</tr>
							</thead>
							<tbody>
							
						
							<?php
							
							
							$sql = mysql_query("SELECT * FROM `artist`");
								
                            while($row = mysql_fetch_array($sql))
							{
							?>
							
								<tr class="even gradeC">
									<td><?php echo $row['first_name'];?></td>
									<td><?php echo $row['last_name'];?></td>
									<td><?php echo $row['email'];?></td>	
									<td><?php echo $row['city'];?></td>
									 <td>
											<a href="index.php?page=artist_myprofile5&s_id=<?php echo $row['s_id']; ?>"><?php if($row['profile']!=NULL) {?>
											<img src="<?php echo 'admin/upload/artist_profile/'.$row['profile'];?>" style="width:60px; height:60px;"/><?php }else{?>
											<img src="img/avatar.jpg"></a>
										<?php } ?>
									</td> 
									<td><?php echo $row['upld_file'];?></td>
									<td><?php echo $row['fees'];?></td>
                                     <td><a href="index.php?page=booking_form&s_id=<?php echo $row['s_id']; ?>" class="btn btn-primary"><h1 style="color:red">book</h1></a></td>
								</tr>
                            <?php } ?>
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div><!-- main -->