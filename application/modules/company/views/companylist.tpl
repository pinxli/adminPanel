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
						<a href="{$baseUrl}company/companymanagement">Company</a>
					</li>
				</ul>
            
				<hr>
                
               <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Company Settings</h2>
					</div>
					<div class="box-content">
						
						<a class="quick-button span4" href="{$baseUrl}company/addcompany">
							<i class="fa-icon-group"></i>
							<p>ADD COMPANY</p>
						</a>
						<!-- <a class="quick-button span4" href="{$baseUrl}company/editcompany">
							<i class="icon-pencil"></i>
							<p>EDIT COMPANY INFORMATION</p>	
						</a>
						<a class="quick-button span4" href="{$baseUrl}company/companymanagement">
							<i class="icon-eye-open"></i>
							<p>VIEW COMPANY LISTS</p>
						</a>-->
					
						
						<div class="clearfix"></div>
					</div>	
				</div>
				
			</div>
                <div class="{$msgClass}"><strong>{$msgInfo}</strong></div>  
                
                
                <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Company Lists</h2>
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
                                  	  <th>Logo</th>
									  <th>Company Name</th>
									  <th>E-mail Address</th>
									  <th>Status</th>
                                      <th>Edit</th>                                        
								  </tr>
							  </thead>   
							  <tbody>
								{foreach from=$companyList item=company}
									{if $company->company_logo eq ''}
										{assign "icon" $default_icon}
									{else}
										{assign "icon" $company->company_logo}
									{/if}
								
								<tr>
                                	<td><img src="{$baseUrl}{$icon}" width="30"></td>
									<td>{$company->company_name}</td>
									<td class="center">{$company->company_email}</td>
									<td class="center"><span class="label label-success">Active</span></td>
                                    <td class="center">
										<a class="btn btn-info" href="{$baseUrl}company/editcompany/{$company->company_id}">
											<i class="icon-edit icon-white"></i>  
										</a>
									</td>                                       
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