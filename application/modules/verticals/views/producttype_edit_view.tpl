<div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="home.html">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="{$baseUrl}verticals/verticaltypes/">Verticals</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="{$baseUrl}verticals/verticaltypes/">Vertical Types</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="#">Edit Vertical Type</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span> Edit Vertical Type</h2>
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
							  
							<hr><br />
								
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
								  <label class="radio">
									<input type="radio" name="option_autoload" id="optionsRadios1" value="1" checked="">
									Yes
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="option_autoload" id="optionsRadios2" value="0">
									No
								  </label>
								</div>
							  </div>
								
							  <div class="control-group">
							  	<div class="controls">
									<span class="label label-success hidden-phone" id="btn_addverticals">Add Vertical Option</span>
								</div>
							  </div>

					<div class="box-content">
						<table id="myTable"
							class="table table-striped table-bordered bootstrap-datatable">
							<thead>
								<tr>
									<th width="26%">Option Key</th>
									<th width="27%">Option Description</th>
									<th width="10%">Autoload</th>

								</tr>
							</thead>
							<tbody>
								{if $verticalOptions eq true}
								{foreach $verticalOptions item=verticaloptions}
									{if $verticaloptions->option_autoload == 1}
										{assign 'autoload' 'Yes'}
									{else}
										{assign 'autoload' 'No'}
									{/if}
								<tr>
									<td>{$verticaloptions->option_key}</td>
									<td>{$verticaloptions->option_description}</td>
									<td>{$autoload}</td>
								</tr>
								{/foreach}
								{/if}
							</tbody>
						</table>
					</div>

					<div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="product_type_id" value="{$product_type_id}">
							<input type="hidden" name="editnow" value="editnow">
							
							<!-- handles added vertical options -->
							<input type="hidden" name="verticaloptions" id="verticaloptions" value="" />	
						{$form_close}
					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10-->