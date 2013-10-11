<?php 
$this->parser->parse('includes/header.tpl',$data,'','',TRUE); //last parameter is for root path
$this->parser->parse($mainContent,$data);
$this->parser->parse('includes/footer.tpl', $data,'','',TRUE); //last parameter is for root path
?>