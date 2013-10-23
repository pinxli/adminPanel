<div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Product Type</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Add Product Type</h2>
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
								<label class="control-label" for="focusedInput"> Product Type:</label>
								<div class="controls">{$product_type}</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput"> Description:</label>
								<div class="controls">{$description}</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> URL Slug:</label>
								<div class="controls">{$url_slug}</div>
							  </div>
							  
							  <br /><hr>
								
							  <div class="control-group">
								<img alt="" src="{$baseUrl}assets/img/add.png">
							  </div>
								
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Option Key:</label>
								<div class="controls">{$option_key}</div>
							  </div>
								
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Option Description:</label>
								<div class="controls">{$option_description}</div>
							  </div>
								
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Option Autoload:</label>
								<div class="controls">
								<input type="radio" name="option_autoload" value="1" checked="checked">Yes &nbsp;
								<input type="radio" name="option_autoload" value="0">No
								</div>
							  </div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						{$form_close}
					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10-->