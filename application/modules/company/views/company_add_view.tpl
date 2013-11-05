<div id="content" class="span10">
			<!-- start: Content -->
            	<hr>
            
				<ul class="breadcrumb">
					<li>
						<a href="{$baseUrl}dashboard/members_area">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="{$baseUrl}company/companymanagement">Company</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="{$baseUrl}company/addcompany">Add Company</a>
					</li>
				</ul>
            
				<hr>
            	
                
                    
                <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-content">
						
						<a class="quick-button span4" href="{$baseUrl}company/addcompany">
							<i class="fa-icon-group"></i>
							<p>ADD COMPANY</p>
						</a>
						<!-- <a class="quick-button span4" href="{$baseUrl}company/editcompany">
							<i class="icon-pencil"></i>
							<p>EDIT COMPANY INFORMATION</p>	
						</a>
						<a class="quick-button span4" href="{$baseUrl}company/companymanagement">
							<i class="icon-eye-open"></i>
							<p>VIEW COMPANY LISTS</p>
						</a>-->
						
						<div class="clearfix"></div>
					</div>	
				</div>
				
			</div>
			
				<!-- for error/success info message -->
                {if $msgInfo}
                    <div class="{$msgClass}">
                    	<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                    	<strong>{$msgInfo}</strong>
                    </div>
                {/if} 
                
                <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Add Company Here</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						{$formOpen}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Company Name</label>
							  <div class="controls">
								{$companyName}
							  </div>
							</div>
							  
						   <div class="control-group input-prepend">
							<label class="control-label" for="focusedInput">Website Link</label>
							<div class="controls">
							  <span class="add-on">www.</span>
							  {$companyWeblink}
							</div>
						  </div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Email</label>
							  <div class="controls">
								{$companyEmail}
							  </div> 
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Phone</label>
							  <div class="controls">
								{$companyPhone}
							  </div> 
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Fax</label>
							  <div class="controls">
								{$companyFax}
							  </div> 
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Address</label>
							  <div class="controls">
								{$companyAddress}
							  </div> 
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Contract</label>
							  <div class="controls">
								{$companyContract}
							  </div> 
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Upload Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="upload_image">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="input-xlarge" id="textarea2" rows="3" name="description"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						{$formClose} 
					</div>
				</div><!--/span-->

			</div>

				<!--/row-->
    			
			<!-- end: Content -->
</div><!--/#content.span10-->