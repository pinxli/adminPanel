<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="{$baseUrl}dashboard/members_area">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a>
					</li>
				</ul>
				<hr>
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
					<h2><i class="icon-list"></i><span class="break"></span>{$productType}</h2>
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
								
								{if $product->product_icon eq ''}
									{assign "icon" $default_icon}
								{else}
									{assign "icon" $product->product_icon}
								{/if}
								
								{if file_exists($product->product_icon)}
									{assign 'icon' $icon}
								{else}
									{assign 'icon' $default_icon}
								{/if}
							<tr>
								<td><p class="text-center"><img src="{$baseUrl}{$icon}" width="30"></p></td>
								<td class="center">{$product->product_name}</td>
								<td class="center">{$product->product_link}</td>
								<td class="center">
									<span class="label {$status_ico}">{$status}</span>
								</td>
							
								 <td class="center">
									<a class="btn btn-success" href="{$baseUrl}verticals/viewproduct/{$product->product_id}">
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