<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a>
					</li>
				</ul>
				<hr>
			</div>

			   <div class="row-fluid sortable">
				<div class="box span12">
                     <div class="{$msgClass}"><strong>{$msgInfo}</strong></div>        
					<div class="box-header" data-original-title>
					<h2><i class="fa fa-list"></i><span class="break"></span>All Categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
	                                  <th>Product Image</th>
									  <th>Product Name</th>
									  <th>Product Link</th>
									  <th>Status</th>
                                      <th>Action</th>  
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							{foreach from=$productList item=product}
							{if $product->product_type_id eq $productTypeId}
							{if $product->status == '1'}
								{assign 'status' '&nbsp;&nbsp;Active&nbsp;&nbsp;'}
								{assign 'status_ico' 'label-success'}
							{else}
								{assign 'status' '&nbsp;Inactive&nbsp;'}
								{assign 'status_ico' 'label-failed'}
							{/if}
							<tr>
								<td><img src="{$baseUrl}{$product->product_icon}" width="30"></td>
								<td class="center">{$product->product_name}</td>
								<td class="center">{$product->product_link}</td>
								<td class="center">
									<span class="label {$status_ico}">{$status}</span>
								</td>
							
								 <td class="center">
									<a class="btn btn-success" href="#">
										<i class="fa fa-list-alt icon-white" title="View"></i>  
									</a>
									<a class="btn btn-info" href="{$baseUrl}verticals/editproduct/{$product->product_id}">
										<i class="icon-edit icon-white" title="Edit"></i>  
									</a>
									<!-- <a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>-->
								</td> 
							</tr>
							{/if}
							{/foreach}
						  </tbody>
					  </table> 
                          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		<hr>
			<!-- end: Content -->
</div><!--/#content.span10-->