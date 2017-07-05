<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
<?php
	$sql = "SELECT * FROM `artist` WHERE `s_id` = ".$_GET['s_id'];
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
					<h2>Info</h2>
					</div>
				
				</div>
				</div>
				<div/>
				<div>
				 
				 <div class="panel-body">
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">firstname:</label>
								<label class="col-sm-3"><?php echo ucwords ($data['first_name']);?></label>
						</div>
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">middlename:</label>
								<label class="col-sm-3"><?php echo ucwords ($data['middle_name']);?></label>
						</div>
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">lastname:</label>
								<label class="col-sm-3"><?php echo ucwords ($data['last_name']);?></label>
						</div>
						
						
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">fees:</label>
								<label class="col-sm-3"><?php echo ucwords ($data['fees']);?></label>
						</div>
						
						
					</div>
					</div>
				<div>
				<h2 align="center">upload files</h2>
		<?php
							$sql = mysql_query("SELECT * FROM `gallery` WHERE `a_id` = ".$_GET['s_id']);
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<tr class="even gradeC">
									 <td>
											<?php if($row['photo']!=NULL) {?>
											<img src="<?php echo 'admin/upload/gallery_photo/'.$row['photo'];?>" style="width:100%; height:600px;"/><?php }else{?>
											<img src="img/avatar.jpg">
										
										<?php } ?>
									</td>
									 <td>
									 <video src="<?php echo 'admin/upload/gallery_video/'.$row['video'];?>" controls="controls" >abc</video> 
									</td>
									 
									
								</tr>
								
                            <?php } ?>
							
			</div></div>