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
            
             <div class="row-fluid">

                        <div class="circleStats">

                             <div class="span3 offset2" onTablet="span4" onDesktop="span2">
                                <div class="circleStatsItem blue">
                                    <i class="icon-globe"></i>
                                    <span class="plus">+</span>
                                    <span class="percent">%</span>
                                    <input type="text" value="50" class="blueCircle" />
                                </div>
                                <div class="box-small-title">Over All Product Rate</div>
                            </div>

                            <div class="noMargin span2 offset1" onTablet="span4" onDesktop="span2">
                              <div class="circleStatsItem yellow">
                                <div class="circleStatsItem yellow"> 
                                <i class="icon-th-large"></i> 
                                <!--<span class="plus">+</span>--> 
                                <span class="percent">%</span>
                                  <input type="text" value="30" class="yellowCircle" />
                                </div>
                              </div>
                              <div class="box-small-title">Top Selling Product Rate</div>
                            </div>


                            <div class="span2 offset1" onTablet="span4" onDesktop="span2">
                                <div class="circleStatsItem lightorange">
                                    <i class="icon-shopping-cart"></i>
                                    <!--<span class="plus" pull>+</span>-->
                                    <span class="percent">%</span>
                                    <input type="text" value="42" class="lightOrangeCircle" />
                                </div>
                                <div class="box-small-title">Revenue</div>
                            </div>

						
           
                  </div>
              </div>                 
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                     <div class="{$msgClass}"><strong>{$msgInfo}</strong></div>        
					<div class="box-header" data-original-title>
					<h2><i class="icon-sitemap"></i><span class="break"></span>All Categories</h2>
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
							<tr>
								<td><img src="{$baseUrl}{$product->product_icon}" width="30"></td>
								<td class="center">{$product->product_name}</td>
								<td class="center">{$product->product_link}</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
							
								 <td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
									</a>
									<a class="btn btn-info" href="{$baseUrl}verticals/editproduct/{$product->product_id}">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
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