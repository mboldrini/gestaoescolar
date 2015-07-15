<?php 

	$this ->load-> view('base/secretariaHeader');
	$this->load->view('base/secretariaSidebar');


	if($tela != ''){
		 $this -> load -> view('secretaria/'.$tela);
	}


	$this->load->view('base/footer');