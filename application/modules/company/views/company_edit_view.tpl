<div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="home.html">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="{$baseUrl}company/companymanagement">Company</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="{$baseUrl}company/editcompany">Edit Company</a> <span class="divider">/</span>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Edit Company</h2>
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
								<label class="control-label" for="focusedInput">Company Name:</label>
								<div class="controls">
								  {$company_name}
								</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Company Email:</label>
								<div class="controls">
								  {$company_email}
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Phone:</label>
								<div class="controls">
								  {$company_phone}
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Fax:</label>
								<div class="controls">
								  {$company_fax}
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Address:</label>
								<div class="controls">
								  {$company_address}
								</div>
							  </div>
							  
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Company Contact:</label>
								<div class="controls">
								  {$company_contact}
								</div>
							  </div>
							  
							   <div class="control-group input-prepend">
								<label class="control-label" for="focusedInput">Website Link:</label>
								<div class="controls">
								  <span class="add-on">www.</span>
								  {$company_weblink}
								</div>
							  </div>
							  
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Replace Image:</label>
								<div class="controls">
								   <input class="input-file uniform_on" id="fileInput" type="file" name="upload_image">
								</div>
							  </div> 
							        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								{$company_description}
								<!-- <textarea class="input-xlarge" rows="3" name="company_description" id="company_description">{$company->company_description}</textarea>-->
							  </div>
							</div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="company_id" value="{$company_id}">
							<input type="hidden" name="editnow" value="editnow">
							{$form_close}
					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10-->