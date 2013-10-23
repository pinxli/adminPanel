<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Product Area</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="{$baseUrl}product/addproductarea">Add Product Area</a>
                <hr>
                    <div class="{$msgClass}"><strong>{$msgInfo}</strong></div>        
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>Product Areas</h2>
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
                                  <th width="10%">Active</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							{foreach from=$productAreaList item=AreaList}
							<tr>
								<td>{$AreaList->area_name}</td>
								<td class="center">{$AreaList->area_description}</td>
				
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="{$baseUrl}product/editproductarea/{$AreaList->area_id}">
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