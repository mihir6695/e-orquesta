<?php
$ban_id = $_GET['ban_id'];
$sql = mysql_query("SELECT * FROM `banner` where ban_id='".$ban_id."'");
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
						<form class="form-horizontal" method="post" action="index.php?page=banner_action" enctype="multipart/form-data" >
					        <fieldset>
                            <input type="hidden" name="ban_id" value="<?php echo $row['ban_id']; ?>" />
                            
					          <div class="control-group">
					            <label class="control-label" for="input01">Name</label>
					            <div class="controls">
					              <input type="text" name="name"  class="input-large" id="name" value="<?php if($_SESSION['name']!=''){ echo $_SESSION['name']; unset($_SESSION['name']); }else{ echo $row['name'];} ?>">
									 </div>
					          </div>
                              
                              <div class="control-group">
					            <label class="control-label" for="input01">title</label>
					            <div class="controls">
					              <input type="text" name="title" class="input-large" id="title" value="<?php if($_SESSION['title']!=''){ echo $_SESSION['title']; unset($_SESSION['title']); }else{ echo $row['title'];} ?>">
										
							   </div>
					          </div>
                             <div class="control-group">
					            <label class="control-label" for="input01">upld_file</label>
					            <div class="controls">					              
					              <input type="file" class="input-large" name="upld_file" ><?php echo $row['upld_file'];?>
					             </div>
					          </div>						
							
					          <div class="control-group">
					      
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