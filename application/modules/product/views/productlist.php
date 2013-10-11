<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Company</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="<?php echo base_url();?>company/addcompany">Add Company</a>
                <hr>
                            
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>Company</h2>
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
								  <th width="26%">Product Name</th>
								  <th width="27%">Product Description</th>
								  <th width="26%">Product Icon</th>
                                  <th width="11%">Product Link</th>
                                  <th width="10%">Active</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php 
							if ( $productList != false ){
							foreach ($productList as $product):
							?>
							
							<tr>
								<td><?php echo $product->product_name;?></td>
								<td class="center"><?php echo $product->product_description;?></td>
								<td class="center"><?php echo $product->product_icon;?></td>
								<td class="center"><?php echo $product->product_link;?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="<?php echo base_url() .'product/editproduct/'. $product->product_id;?>">
										<i class="icon-edit icon-white"></i>  
									</a>
								</td>
							</tr>
							
							<?php
							endforeach;
							}
							else{
							?>
							<tr><td colspan="5"><?php echo $messageInfo; ?></td></tr>
							<?php 
							}
							?>
							
							
						  </tbody>
					  </table> 
                          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		<hr>
			<!-- end: Content -->
</div><!--/#content.span10-->