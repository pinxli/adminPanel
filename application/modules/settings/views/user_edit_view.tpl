
<div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Users</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Edit User</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
					
						{$form_open}
							<fieldset>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">First Name:</label>
								<div class="controls">
								  {$fname}
								</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Last Name:</label>
								<div class="controls">
								  {$lastname}
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email:</label>
								<div class="controls">
								  {$email}
								</div>
							  </div>
                              
                              <div class="control-group">
    							<label class="control-label" for="inputPassword">Password:</label>
    							<div class="controls">
       							 {$password}
       							 </div>
       						  </div>
                             
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Confirm Password:</label>
								<div class="controls">
								  {$cpassword}
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label">Role</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="user_level_id" id="optionsRadios1" value="1" checked="">
									Admin
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="user_level_id" id="optionsRadios2" value="2">
									Member
								  </label>
								</div>
							  </div>
							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="userid" value="{$userid}">
							<input type="hidden" name="editnow" value="editnow">
						{$form_close}
					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10-->