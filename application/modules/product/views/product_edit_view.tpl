<div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Product</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Edit Product</h2>
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
								<label class="control-label" for="focusedInput">Product Name:</label>
								<div class="controls">{$product_name}</div></div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Description:</label>
								<div class="controls">{$product_description}</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Type:</label>
								<div class="controls">{$productTypeList}</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Product Area:</label>
								<div class="controls">{$areaList}</div>
							 </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Country:</label>
								<div class="controls">{$countryList}</div>
							  </div> 
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Company:</label>
								<div class="controls">{$companyList}</div>
							  </div>
							  
						  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Icon:</label>
								<div class="controls">{$product_icon}</div>
							  </div>
							  
						 	 <div class="control-group">
								<label class="control-label" for="focusedInput">Product Link:</label>
								<div class="controls">{$product_link}</div>
							  </div>

							  <div class="control-group">
								<label class="control-label">Featured</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="featured" id="optionsRadios1" value="1" checked="">
									Yes
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="featured" id="optionsRadios2" value="0">
									No
								  </label>
								</div>
							  </div>
							  
							  
							   <div class="control-group">
								<label class="control-label">Status</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="status" id="optionsRadios1" value="1" checked="">
									Yes
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="status" id="optionsRadios2" value="0">
									No
								  </label>
								</div>
							  </div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="product_id" value="{$product_id}">
							<input type="hidden" name="editnow" value="editnow">
							{$form_close}
					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10-->