<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="{$baseUrl}dashboard/members_area">Home</a> <span class="divider">/</span>
					</li>
					
					<li>
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
					
					<li>
						<a href="#">Product Area</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
               
					<div class="box-content">
						
						<a class="quick-button span4" href="{$baseUrl}verticals/addproductarea">
							<i class="fa fa-plus-circle"></i>
							<p>ADD PRODUCT AREA</p>
						</a>
					
						<div class="clearfix"></div>
					</div>  
          
			<!-- for error/success info message -->
	        {if $msgInfo}
	        	<br />
	        	<div class="{$msgClass}">
	            	<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
	                <strong>{$msgInfo}</strong>
	            </div>
	        {/if}  
			
			   <div class="row-fluid sortable">
				<div class="box span12">   
					<div class="box-header" data-original-title>
						<h2><i class="icon-list"></i><span class="break"></span>Product Areas</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th width="26%">Area Name</th>
								  <th width="27%">Area Description</th>
								  <th width="27%">Country</th>
                                  <th width="10%">Active</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							{foreach from=$productAreaList item=AreaList}
							<tr>
								<td>{$AreaList->area_name}</td>
								<td class="center">{$AreaList->area_description}</td>
								<td class="center">{$AreaList->short_name}</td>				
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="{$baseUrl}verticals/editproductarea/{$AreaList->area_id}">
										<i class="icon-edit icon-white"></i>  
									</a>
								</td>
							</tr>
							{/foreach}
						
							
						  </tbody>
					  </table> 
                          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		<hr>
			<!-- end: Content -->
</div><!--/#content.span10-->