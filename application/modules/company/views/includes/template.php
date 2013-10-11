<?php 
$this->parser->parse('includes/header.tpl',$data);
$this->parser->parse($mainContent,$data);
$this->parser->parse('includes/footer.tpl', $data);

// $this->load->view('includes/header');
// $this->load->view($main_content);
// $this->load->view('includes/footer'); 

?>