<?php 
$res = $this->api_functions->verticalTypes();
if ( $res ){ $verticals = ( $res->rc == 0 ) ? $res->data->producttypelist : array(); }
else{ $verticals = array(); }

$data['verticalType'] = $verticals;
$this->parser->parse('includes/header.tpl',$data,'','',TRUE); //last parameter is for root path
$this->parser->parse($mainContent,$data);
$this->parser->parse('includes/footer.tpl', $data,'','',TRUE); //last parameter is for root path
?>