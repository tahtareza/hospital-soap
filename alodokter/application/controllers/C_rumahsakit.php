<?php
Class C_rumahsakit extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('M_rumahsakit');
	}

 // menampilkan data rumahsakit
	function index(){
		$data['rumahsakit'] = $this->M_rumahsakit->getData();
		$this->load->view('rsView',$data);
	}

}

/* End of file C_rumahsakit.php */
/* Location: ./application/controllers/C_rumahsakit.php */