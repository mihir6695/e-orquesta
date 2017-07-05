<?php
$feed_id=$_GET['feed_id'];
$sql="SELECT * FROM `feedback` where feed_id='$feed_id'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
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
						<form class="form-horizontal" method="post" action="index.php?page=feedback_action" enctype="multipart/form-data" onsubmit="return feedback_form();">
					        <fieldset>
                            <input type="hidden" name="feed_id" value="<?php echo $row['feed_id'];?>"/>
                            
					          
							 
							  <div class="control-group">
					            <label class="control-label" for="input01">Name</label>
					            <div class="controls">
					              <input type="text" name="name"  class="input-large" id="name" value="<?php echo $row['name']; ?>">
										<span style="display:none; color:#FF0000" id="req_name">enter name</span>
										<span style="display:none; color:#F00"id="valid_name">enter valid name</span>
									
								</div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">email</label>
					            <div class="controls">
					              <input type="text" name="email" class="input-large" id="input01" value="<?php if($_SESSION['email']!=''){ echo $_SESSION['email']; unset($_SESSION['email']); }else{ echo $row['email'];} ?>">
					            </div>
					          </div>
							  <div class="control-group">
					            <label class="control-label" for="input01">Contactn NO</label>
					            <div class="controls">
					              <input type="text" name="contact_no" class="input-large" id="input01" value="<?php if($_SESSION['contact_no']!=''){ echo $_SESSION['contact_no']; unset($_SESSION['contact_no']); }else{ echo $row['contact_no'];} ?>">
					            </div>
					          </div>
                                <div class="control-group">
					            <label class="control-label" for="input01">feedback</label>
					            <div class="controls">
					              <input type="text" name="feedback" class="input-large" id="input01" value="<?php if($_SESSION['feedback']!=''){ echo $_SESSION['feedback']; unset($_SESSION['feedback']); }else{ echo $row['feedback'];} ?>">
					            </div>
					          </div>							  
							 <div class="control-group">
					            <label class="control-label">Status</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="status" id="active" value="Active" <?php if($row['status']=='Active' || $row['ststus']=='' ){?> checked="checked" <?php } ?>>Active
					              </label>
					              <label class="radio">
					                <input type="radio" name="status" id="inactive" value="inactive" <?php if($row['status']=='Inactive'){?> checked="checked" <?php } ?>>Inactive
									
								 </label>
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