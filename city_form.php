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
                    
                    <form class="form-horizontal" action="index.php?page=city_action" method="post" enctype="multipart/form-data">
                        <fieldset>
                          <div class="control-group">
                            <label class="control-label" for="select01">Select State</label>
                            <div class="controls">
                              <select id="select01" name="state_id">
                                <option value="">- Select State -</option>
                                <?php
									$sqlState = mysql_query("select * from state");
									while($rowState = mysql_fetch_assoc($sqlState)){
								?>
                                <option value="<?php echo $rowState['state_id']; ?>"><?php echo $rowState['state_name']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="input01">City Name</label>
                            <div class="controls">
                              <input type="text" class="input-large" name="city_name" id="input01">
                            </div>
                          </div>
                          
                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-large" name="submit">Submit</button>
                            <button class="btn btn-large">Cancel</button>
                          </div>
                        </fieldset>
                      </form>	
                    
                </div> <!-- /widget-content -->
                    
            </div>	
            
            
        </div> <!-- /span8 -->
        
        
        
    </div> <!-- /row -->
    
    
    
    
</div> <!-- /.container -->