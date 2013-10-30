<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					
					<li>
						<a href="#">Settings</a> <span class="divider">/</span>
					</li>
					
					<li>
						<a href="#">API Logs</a>
					</li>
				</ul>
				<hr>
			</div>
			   
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="{$baseUrl}settings/excelexport/apilogList">Extract To Excel</a>
                <hr>
                            
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>API Logs</h2>
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
								  <th>Client</th>
								  <th>Method</th>
								  <th>URL</th>
                                  <th>Access Time</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							{foreach from=$logList item=loglist}
							
							<tr>
								<td>{$loglist->clientID}</td>
								<td class="center">{$loglist->log_method}</td>
								<td class="center">{$loglist->log_url}</td>
								<td class="center">{$loglist->log_access_time}</td>
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