<div id="content" class="span10">
			<!-- start: Content -->
			

				<hr>
            
				<ul class="breadcrumb">
					<li>
						<a href="home.html">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="#">Vertical Types</a>
					</li>
				</ul>
              	<hr>     
                
                <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="fa fa-list"></i><span class="break"></span>Vertical Types Settings</h2>
					</div>
					<div class="box-content">
						<a class="quick-button span4" href="{$baseUrl}verticals/addverticaltype">
							<i class="icon-folder-open"></i>
							<p>ADD VERTICAL TYPES</p>
						</a>
						<div class="clearfix"></div>
					</div>	
				</div><!--/span-->
				
				</div>
    	
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                    <div class="{$msgClass}"><strong>{$msgInfo}</strong></div>   
					<div class="box-header" data-original-title>
						<h2><i class="fa fa-list"></i><span class="break"></span>Vertical Types</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="tbl">
						  <thead>
							  <tr>
								  <th width="5%">Product ID</th>
								  <th width="26%">Product Name</th>
								  <th width="27%">Product Description</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							{foreach from=$productTypeList item=producttype}
							
							<tr>
								<td>{$producttype->product_type_id}</td>
								<td>{$producttype->product_type}</td>
								<td class="center">{$producttype->description}</td>
								<td class="center">
									<a class="btn btn-info" href="{$baseUrl}verticals/editverticaltype/{$producttype->product_type_id}">
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