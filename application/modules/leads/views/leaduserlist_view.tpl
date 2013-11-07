<div id="content" class="span10">
			<!-- start: Content -->
            	<hr>
            
				<ul class="breadcrumb">
					<li>
						<a href="{$baseUrl}dashboard/members_area">Home</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="#">Leads</a>
					</li>
				</ul>
            
				<hr>

					<div class="box-content">
						<a class="quick-button span4" href="{$baseUrl}leads/exporttoexcel/leaduserlist">
							<i class="fa fa-download"></i>
							<p>EXPORT TO EXCEL</p>
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
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Lead User</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered">
								<tr>
									<td>Search By:
										<select id="searchby" name="searchby">
											<option value="0">First Name</option>
											<option value="1">Last Name</option>
											<option value="2">Email</option>
											<option value="3">Phone No.</option>
										</select>
										<input type="text" id="searchkeyword" name="searchkeyword" value="" placeholder="Type keyword.." />
										<!-- <button class="btn btn-primary" id="searchbtn" type="button" alt="{$baseUrl}verticals/productsearch">Search</button>-->
									</td>
								</tr>
							</table>
						<table class="table table-striped table-bordered bootstrap-datatable" id="datable-prodlist">
							  <thead>
								  <tr>
                                  	  <th>First Name</th>
                                  	  <th>Last Name</th>
									  <th>Email</th>
									  <th>Phone No.</th>                                    
								  </tr>
							  </thead>   
							  <tbody>
							  	{foreach from=$leadUserList item=item}
							  	<tr>
							  		<td>{$item->first_name}</td>
							  		<td>{$item->last_name}</td>
							  		<td>{$item->email}</td>
							  		<td>{$item->phone_no}</td>
							  	</tr>
							  	{/foreach}
							  </tbody>
						 </table>      
					</div>
				</div><!--/span-->
			</div>

				<!--/row-->
    			
			<!-- end: Content -->
</div><!--/#content.span10-->