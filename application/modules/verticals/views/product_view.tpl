<div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="{$baseUrl}verticals/productlist">Product List</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="#">View Product</a>
					</li>
				</ul>
				<hr>
			</div>
        
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>View Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<fieldset>
					
					<div class="box-content">
						<table id="myTable"
							class="table table-striped table-bordered bootstrap-datatable">
							<thead>
								<tr>
									<th width="3%">Product Name:</th>
									<th width="20%">{$productInfo->product_name}</th>
								</tr>
								
								<tr>
									<th width="1%">Product Type:</th>
									<th width="20%">{$productInfo->product_type}</th>
								</tr>
								
								<tr>
									<th width="1%">Company :</th>
									<th width="20%">{$productInfo->company_name}</th>
								</tr>
								
								<tr>
									<th width="1%">Country :</th>
									<th width="20%">{$productInfo->short_name}</th>
								</tr>
								<tr>
									<th width="1%">Area :</th>
									<th width="20%">{$productInfo->area_name}</th>
								</tr>
								
								<tr>
									<th width="1%">Product Description :</th>
									<th width="20%">{$productInfo->product_description}</th>
								</tr>
								
								<tr>
									<th width="1%">Product Link :</th>
									<th width="20%">{$productInfo->product_link}</th>
								</tr>
								
								<tr>
									<th width="1%">Product Image :</th>
									<th width="20%"><img src="{$baseUrl}{$productInfo->product_icon}" width="30"></th>
								</tr>
								
								<tr>
									<th width="1%">Featured :</th>
									<th width="20%">{if $productInfo->featured == 1} Yes {else} No {/if}</th>
								</tr>
								
								<tr>
									<th width="1%">Status :</th>
									<th width="20%">{if $productInfo->status == 1} Active {else} Inactive {/if} </th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>	

							
					<hr>Product Option<br />

					<div class="box-content">
						<table id="myTable"
							class="table table-striped table-bordered bootstrap-datatable">
							<thead>
								<tr>
									<th width="26%">Option</th>
									<th width="27%">Value</th>
									<th width="10%">Expiry Date</th>

								</tr>
							</thead>
							<tbody>
								{if $productOptions eq true}
								{foreach $productOptions item=options}
								<tr>
									<td>{$options->option}</td>
									<td>{$options->option_value}</td>
									<td>{$options->expiry_date}</td>
								</tr>
								{/foreach}
								{/if}
							</tbody>
						</table>
					</div>
				</fieldset>
							
					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10-->