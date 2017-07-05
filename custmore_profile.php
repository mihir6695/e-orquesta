<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
<?php
	$sql = "SELECT * FROM `custmore` WHERE `c_id` = ".$_SESSION['c_id'];
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
		<!--------------------------------->
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
						<img src = "<?php echo 'admin/upload/custmore_profile/'.$data['profile']; ?>" class="img-thumbnail" style="margin-top:150px;" height="100" width="100" alt="no img" />
					</div>
				</div>
				<div class="panel panel-default ">
					<div class="panel-heading" style="background-color:#000; color:#fff;">
					<a href="index.php?page=customer_register" class="btn btn-primary pull-right"style="margin-top:15px;">edit</a><h2>Personal Info</h2>
					</div>
					<div class="panel-body">
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">Firstname:</label>
								<label class="col-sm-3"><?php echo ucwords ($data['first_name']);?></label>
						</div>
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">middlename:</label>
							<label class="col-sm-3"><?php echo ucwords ($data['middle_name']);?></label>
						</div>
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">Lastname:</label>
							<label class="col-sm-3"><?php echo ucwords ($data['last_name']);?></label>
						</div>
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">E-mail:</label>
							<label class="col-sm-3"><?php echo($data['email']);?></label>
						</div>
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">phone_no:</label>
							<label class="col-sm-3"><?php echo ucwords ($data['phone_no']);?></label>
						</div>
						
						<div class="col-lg-12">
							<label class="col-sm-3" style="color:blue;">profile:</label>
							<label class="col-sm-3"><?php echo  ($data['profile']);?></label>
						</div>
						
					</div>
				</div>
			</div>
		</div>