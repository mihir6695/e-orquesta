
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
						<form class="form-horizontal" method="post" action="index.php?page=booking_form" enctype="multipart/form-data" onsubmit="return admin_form();">
					        <fieldset>
                            <input type="hidden" name="book_id" value="<?php echo $row['id']; ?>" />
                            
					          <div class="control-group">
					            <label class="control-label" for="input01">a_id</label>
					            <div class="controls">
					              <input type="text" name="a_id"  class="input-large" id="a_id" value="<?php if($_SESSION['a_id']!=''){ echo $_SESSION['a_id']; unset($_SESSION['a_id']); }else{ echo $row['a_id'];} ?>">
									 </div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">mul_id</label>
					            <div class="controls">
					              <input type="text" name="mul_id" class="input-large" id="mul_id" value="<?php if($_SESSION['mul_id']!=''){ echo $_SESSION['mul_id']; unset($_SESSION['mul_id']); }else{ echo $row['mul_id'];} ?>">
									</div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">c_id</label>
					            <div class="controls">
					              <input type="text" name="c_id" class="input-large" id="c_id" value="<?php if($_SESSION['c_id']!=''){ echo $_SESSION['c_id']; unset($_SESSION['c_id']); }else{ echo $row['c_id'];} ?>">
					            </div>
					          </div>
            
					         
							   <div class="control-group">
					            <label class="control-label" for="input01">fees</label>
					            <div class="controls">
					              <input type="textarea" name="fees" class="input-large" id="fees" value="<?php if($_SESSION['fees']!=''){ echo $_SESSION['fees']; unset($_SESSION['fees']); }else{ echo $row['fees'];} ?>">
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