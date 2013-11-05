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
						<a href="#">Product List</a>
					</li>
				</ul>
				<hr>
			</div>   
                
             
			<div class="box-content">
				<a class="quick-button span4" href="{$baseUrl}verticals/addproduct/">
					<i class="fa fa-plus-circle"></i>
					<p>ADD PRODUCT</p>
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
					<h2><i class="icon-list"></i><span class="break"></span>All Categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
						<!-- <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#advancedsearch">
						  Advance Search
						</button>
						<br /><br />
						<div id="advancedsearch" class="collapse out">
							<table class="table table-striped table-bordered">
								<tr>
									<td>Search By:
										<select>
											<option>Company</option>
											<option>Area</option>
											<option>Status</option>
											<option>Featured</option>
											<option>Vertical</option>
										</select>
										<input type="text" name="searchby" value="" placeholder="Type keyword.." />
									</td>
								</tr>
							</table>
						</div>-->
						<table class="table table-striped table-bordered">
								<tr>
									<td>Search By:
										<select id="searchby" name="searchby">
											<option value="2">Product Type</option>
											<option value="3">Company</option>
											<option value="4">Area</option>
											<option value="6">Promo</option>
											<option value="7">Status</option>
										</select>
										<input type="text" id="searchkeyword" name="searchkeyword" value="" placeholder="Type keyword.." />
										<!-- <button class="btn btn-primary" id="searchbtn" type="button" alt="{$baseUrl}verticals/productsearch">Search</button>-->
									</td>
								</tr>
							</table>
						<table class="table table-striped table-bordered bootstrap-datatable" id="datable-prodlist">
						  <thead>
							  <tr>
	                                  <th>Product Image</th>
									  <th>Product Name</th>
									  <th>Product Type</th>
									  <th>Company</th>
									  <th>Area</th>
									  <th>Product Link</th>
									  <th>Promo</th>
									  <th>Status</th>
                                      <th width="10%">Actions</th>  
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							{foreach from=$productList item=product}
								{if $product->status == '1'}
									{assign 'status' 'Active'}
									{assign 'status_ico' 'label-success'}
								{else}
									{assign 'status' 'Inactive'}
									{assign 'status_ico' 'label-failed'}
								{/if}
								
								{if $product->promo == '1'}
									{assign 'promo' 'Yes'}
								{else}
									{assign 'promo' 'No'}
								{/if}
								
								{if file_exists($product->product_icon)}
									{assign 'product_icon' $product->product_icon}
								{else}
									{assign 'product_icon' $default_product_img}
								{/if}
							<tr>
								<td><p class="text-center"><img src="{$baseUrl}{$product_icon}" width="30"></p></td>
								<td class="center">{$product->product_name}</td>
								<td class="center">{$product->product_type}</td>
								<td class="center">{$product->company_name}</td>
								<td class="center">{$product->area_name}</td>
								<td class="center">{$product->product_link}</td>
								<td class="center">{$promo}</td>
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
							{/foreach}
						  </tbody>
					  </table> 
                      <input type="hidden" id="prodview_url" value="{$baseUrl}verticals/viewproduct/" />
                      <input type="hidden" id="prodedit_url" value="{$baseUrl}verticals/editproduct/" />
                      <input type="hidden" id="base_url" value="{$baseUrl}" />
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		<hr>
			<!-- end: Content -->
</div><!--/#content.span10-->