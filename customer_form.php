<?php
$c_id = $_GET['c_id'];
$sql = mysql_query("SELECT * FROM `custmore` where c_id='".$c_id."'");
$row = mysql_fetch_assoc($sql);
?>
<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="index.php">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Components</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Form Styles</li>
			</ul>
			
		</div> <!-- /.page-title -->
		
		<div class="row">
			
			<div class="span12">
	      		
	      		<div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Horizontal Layout	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<?php displayErrSucMsg(); ?>
						<form class="form-horizontal" method="post" action="index.php?page=customer_action" enctype="multipart/form-data" onsubmit="return customer_form();">
					        <fieldset>
                            <input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>" />
                            
					          <div class="control-group">
					            <label class="control-label" for="input01">first name</label>
					            <div class="controls">
					              <input type="text" name="first_name"  class="input-large" id="fname" value="<?php echo $row['first_name']; ?>">
					            <span style="display:none; color:#FF0000" id="req_fname">enter first name</span>
										<span style="display:none; color:#F00"id="valid_fname">enter valid first name</span>
								
								</div>
					          </div>
							  <div class="control-group">
					            <label class="control-label" for="input01">middle name</label>
					            <div class="controls">
					              <input type="text" name="middle_name"  class="input-large" id="mname" value="<?php echo $row['middle_name']; ?>">
					             <span style="display:none; color:#FF0000" id="req_mname">enter middle name</span>
										<span style="display:none; color:#F00"id="valid_mname">enter valid middle name</span>
									
								
								</div>
					          </div>
							  <div class="control-group">
					            <label class="control-label" for="input01">last name</label>
					            <div class="controls">
					              <input type="text" name="last_name"  class="input-large" id="lname" value="<?php echo $row['last_name']; ?>">
					            <span style="display:none; color:#FF0000" id="req_lname">enter last name</span>
										<span style="display:none; color:#F00"id="valid_lname">enter valid last name</span>
								
								</div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">email</label>
					            <div class="controls">
					              <input type="text" name="email" class="input-large" id="email" value="<?php if($_SESSION['email']!=''){ echo $_SESSION['email']; unset($_SESSION['email']); }else{ echo $row['email'];} ?>">
										<span style="display:none; color:#FF0000" id="req_email">enter email</span>
										<span style="display:none; color:#F00"id="valid_email">enter valid email</span>
								
								</div>
					          </div>
                           <div class="control-group">
					            <label class="control-label" for="input01">Password</label>
					            <div class="controls">
					              <input type="password" name="password" class="input-large" id="pass" value="<?php if($_SESSION['password']!=''){ echo $_SESSION['password']; unset($_SESSION['password']); }else{ echo $row['password'];} ?>">
										<span style="display:none; color:#FF0000" id="req_pass">enter password</span>
										<span style="display:none; color:#F00"id="valid_pass">password length must be 6 letters</span>
								
								</div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Phoneno</label>
					            <div class="controls">
					              <input type="phoneno" name="phone_no" class="input-large" id="no" value="<?php if($_SESSION['phone_no']!=''){ echo $_SESSION['phone_no']; unset($_SESSION['phone_no']); }else{ echo $row['phone_no'];} ?>">
										<span style="display:none; color:#FF0000" id="req_no">enter phoneNo</span>
										<span style="display:none; color:#F00"id="valid_no">no length must be 10 digit</span>
								
								</div>
					          </div>
							  <div class="control-group">
					            <label class="control-label">gender</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="gender" id="optionsRadios1" value="male" <?php if($row['gender']=='male' || $row ['gender']==''){?> checked="checked" <?php } ?>>male
					              </label>
					              <label class="radio">
					                <input type="radio" name="gender" id="optionsRadios1" value="female" <?php if($row['gender']=='female'){?> checked="checked" <?php } ?>>female
					              </label>
					            </div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">Profile</label>
					            <div class="controls">					              
					              <input type="file" class="input-large" name="profile" ><?php echo $row['profile'];?>
					             </div>
					          </div>		
							            <div class="form-actions">
					            <input type="submit" name="submit" value="submit" class="btn btn-primary btn-large">
					            <button class="btn btn-large">Cancel</button>
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
				
				
		    </div> <!-- /span8 -->
		    
		    
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->