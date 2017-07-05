<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
<?php
	$sql = "SELECT * FROM `artist` WHERE `s_id` = ".$_SESSION['s_id'];
	$query = mysql_query($sql);
	$data = mysql_fetch_assoc($query);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		
		<!--- bootstrap javascript file --->
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
		<!-----------------------------
		---->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" 
		integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<div class="container-fluid well">
		<script>countDown();</script>
			<div class="col-lg-12">
				<div class="panel panel-success">
					<div class="panel-heading">
					<h3>Welcome 
						<?php echo ucwords ($data['first_name']);?></h3>
						
					</div>
					<div class="panel-body" style="background-image:url(2.jpg) ; background-repeat:no-repeat; height:300px;width:100%;">
						<img src = "<?php echo 'admin/upload/artist_profile/'.$data['profile']; ?>" class="img-thumbnail" style="margin-top:150px;" height="100" width="100" alt="no img" />
					</div>
				</div>
				<div class="panel panel-default ">
					<div class="panel-heading" style="background-color:#000; color:#fff;">
					 <a href="index.php?page=artist_register" class="btn btn-primary pull-right"style="margin-top:15px;">edit</a><h2>Personal Info</h2>
				</div>
				<div/>
				<div>
				 <form method="post" action="index.php?page=artist_upld_file" enctype="multipart/form-data">
				
				 <div class="contact-to">
				    <label class="control-label" for="fileInput">Photo</label>
                          <div class="controls">
           <input class="input-file" id="fileInput" name="photo" type="file">
                                    </div>
                 
	                <div class="controls">
					 <label class="control-label" for="fileInput">video
           <input class="input-file" id="fileInput" name="video" type="file">
                        </label>
                   </div>
	               		<input type="submit" class="" name="submit" value="submit">
	                
                    </div>
				</div>
				<div>
				
		
		<?php
							$sql = mysql_query("SELECT * FROM `gallery` WHERE `a_id` = ".$_SESSION['s_id']);
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<tr class="even gradeC">
									<?php 
									$photo=$row['photo'];
									if($photo!='')
									{
										
								
									?>
										<div style="width:100%">		 <td>
											<?php if($row['photo']!=NULL) {?>
											<img src="<?php echo 'admin/upload/gallery_photo/'.$row['photo'];?>" style="width:25%; height:25%;"/><?php }else{?>
										
										<?php } ?>
									</td></div>
									<td><a href="index.php?page=artist_upld_file&id=<?php echo $row['id']; ?>" class="btn btn-info" size="100">Delete</a></td>
									
									<?php } ?>									<?php 
									$video=$row['video'];
									if($video!='')
									{
										
								
									?>
									 <div style="width:100%;">
									 <td>
									 <video src="<?php echo 'admin/upload/gallery_video/'.$row['video'];?>" controls="controls" >abc</video> 
																			</td>
									 <td><a href="index.php?page=artist_upld_file&id=<?php echo $row['id']; ?>" class="btn btn-info">Delete</a></td>
									</div><?php } ?>
								</tr>
								
                            <?php } ?>
							
			</div></div>