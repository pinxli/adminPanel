<?php 
$form_open = form_open('',array('class' => 'form-horizontal', 'method' => 'post'));
$product_name 		= array('name' => 'company_name',	 'class' => 'input-xlarge focused' , 'id' => 'focusedInput', 'placeholder' => 'Company Name' , 	'value' => $c->company_name);
$form_close = form_close();
?>


<div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Company</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Add Company</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
					
						<?php echo $form_open;?>
							<fieldset>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Name:</label>
								<div class="controls">
								  <?php echo form_input($company_name);?>
								</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Company Email:</label>
								<div class="controls">
								  <?php echo form_input($company_email);?>
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Phone:</label>
								<div class="controls">
								  <?php echo form_input($company_phone);?>
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Fax:</label>
								<div class="controls">
								  <?php echo form_input($company_fax);?>
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Address:</label>
								<div class="controls">
								  <?php echo form_input($company_address);?>
								</div>
							  </div>
							  
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Company Contact:</label>
								<div class="controls">
								  <?php echo form_input($company_contact);?>
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Logo:</label>
								<div class="controls">
								  <?php echo form_input($company_logo);?>
								</div>
							  </div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="company_id" value="<?php echo $company_info->data->companyinfo[0]->company_id;?>">
							<input type="hidden" name="editnow" value="editnow">
						<?php echo $form_close;?>
					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10-->