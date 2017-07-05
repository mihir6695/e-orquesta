<?php
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM `user` where id='".$id."'");
$row = mysql_fetch_assoc($sql);
?>
<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="default.htm">Home</a> <span class="divider">/</span>
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
						<form class="form-horizontal" method="post" action="index.php?page=admin_action" enctype="multipart/form-data">
					        <fieldset>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                            
					          <div class="control-group">
					            <label class="control-label" for="input01">Name</label>
					            <div class="controls">
					              <input type="text" name="name"  class="input-large" id="input01" value="<?php if($_SESSION['name']!=''){ echo $_SESSION['name']; unset($_SESSION['name']); }else{ echo $row['name'];} ?>">
					            </div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">Email</label>
					            <div class="controls">
					              <input type="text" name="email" class="input-large" id="input01" value="<?php if($_SESSION['email']!=''){ echo $_SESSION['email']; unset($_SESSION['email']); }else{ echo $row['email'];} ?>">
					            </div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">Password</label>
					            <div class="controls">
					              <input type="password" name="password" class="input-large" id="input01" value="<?php if($_SESSION['password']!=''){ echo $_SESSION['password']; unset($_SESSION['password']); }else{ echo $row['password'];} ?>">
					            </div>
					          </div>
                              <div class="control-group">
                                <label class="control-label" for="fileInput">Profile</label>
                                <div class="controls">
                                  <input class="input-file" id="fileInput" name="profile" type="file">
                                  <img src="" height="50" />
                                </div>
                              </div>
					          <div class="control-group">
					            <label class="control-label">Status</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="status" id="optionsRadios1" value="Active" <?php if($row['status']=='Active'){?> checked="checked" <?php } ?>>Active
					              </label>
					              <label class="radio">
					                <input type="radio" name="status" id="optionsRadios1" value="Inactive" <?php if($row['status']=='Inactive'){?> checked="checked" <?php } ?>>Inactive
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