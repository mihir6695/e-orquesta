<?php
$s_id = $_GET['s_id'];
$sql = mysql_query("SELECT * FROM `artist` where s_id='".$s_id."'");
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
						<form class="form-horizontal" method="post" action="index.php?page=artist_action" enctype="multipart/form-data" onsubmit="return artist_form();" >
					        <fieldset>
                            <input type="hidden" name="s_id" value="<?php echo $row['s_id']; ?>" />
                            
					          <div class="control-group">
					            <label class="control-label" for="input01">first_name</label>
					            <div class="controls">
					              <input type="text" name="first_name"  class="input-large" id="fname" value="<?php echo $row['first_name']; ?>">
					            <span style="display:none; color:#FF0000" id="req_fname">enter first name</span>
										<span style="display:none; color:#F00"id="valid_fname">enter valid first name</span>
								
								</div>
					          </div>
							  <div class="control-group">
					            <label class="control-label" for="input01">middle_name</label>
					            <div class="controls">
					              <input type="text" name="middle_name"  class="input-large" id="mname" value="<?php echo $row['middle_name']; ?>">
					            <span style="display:none; color:#FF0000" id="req_mname">enter middle name</span>
										<span style="display:none; color:#F00"id="valid_mname">enter valid middle name</span>
									
								</div>
					          </div>
							  <div class="control-group">
					            <label class="control-label" for="input01">last_name</label>
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
					            <label class="control-label" for="input01">password</label>
					            <div class="controls">
					              <input type="password" name="password" class="input-large" id="pass" value="<?php if($_SESSION['password']!=''){ echo $_SESSION['password']; unset($_SESSION['password']); }else{ echo $row['password'];} ?>">
										<span style="display:none; color:#FF0000" id="req_pass">enter password</span>
										<span style="display:none; color:#F00"id="valid_pass">password length must be 6 letters</span>
								
							   </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">phone_no</label>
					            <div class="controls">
					              <input type="phone_no" name="phone_no" class="input-large" id="no" value="<?php if($_SESSION['phone_no']!=''){ echo $_SESSION['phone_no']; unset($_SESSION['phone_no']); }else{ echo $row['phone_no'];} ?>">
										<span style="display:none; color:#FF0000" id="req_no">enter phoneNo</span>
										<span style="display:none; color:#F00"id="valid_no">no length must be 10 digit</span>
								
								</div>
					          </div>
							  <div class="control-group">
					            <label class="control-label" for="input01">city</label>
					            <div class="controls">
					              <input type="city" name="city" class="input-large" id="city" value="<?php if($_SESSION['city']!=''){ echo $_SESSION['city']; unset($_SESSION['city']); }else{ echo $row['city'];} ?>">
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
                              <!-- <div class="control-group">
                                <label class="control-label" for="fileInput">Profile</label>
                                <div class="controls">
                                  <input class="input-file" id="fileInput" name="profile" type="file">
                                  <img src="" height="50" />
                                </div>
                              </div>-->
							  <div class="control-group">
					            <label class="control-label" for="input01">Profile</label>
					            <div class="controls">					              
									<input type="hidden" name="old_profile"	value="<?php echo $row['profile']; ?>">	
                                
									<input type="file" class="input-large" name="profile" ><?php echo $row['profile'];?>
					             </div>
					          </div>	
							   	
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Fees</label>
					            <div class="controls">
					              <input type="text" name="fees" class="input-large" id="fees" value="<?php if($_SESSION['fees']!=''){ echo $_SESSION['fees']; unset($_SESSION['fees']); }else{ echo $row['fees'];} ?>">
					            <span style="display:none; color:#FF0000" id="req_fees">enter fees</span>
										<span style="display:none; color:#F00"id="valid_fees">no length must be 10 digit</span>
								
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