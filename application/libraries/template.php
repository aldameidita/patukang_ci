<?php    class template {      
	protected $_ci;  function __construct() {  $this->_ci = &get_instance();     
	}    
	function views($template = NULL, $data = NULL) {  
		if ($template != NULL) {  

		 $data['head'] = $this->_ci->load->view('projek/Template/head', $data, TRUE);

		 $data['header'] = $this->_ci->load->view('projek/Template/header', $data, TRUE);

         $data['isi'] = $this->_ci->load->view($template , $data, TRUE);

         $data['content'] = $this->_ci->load->view('projek/Template/content', $data, TRUE);

         $data['footer'] = $this->_ci->load->view('projek/Template/footer', $data, TRUE);

         $data['js'] = $this->_ci->load->view('projek/Template/js', $data, TRUE);
		
		echo $data['template'] =$this->_ci->load->view('projek/Template/Template', $data, TRUE);
		}
	}
}
?> 