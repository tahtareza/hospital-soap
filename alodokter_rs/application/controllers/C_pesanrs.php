<?php
Class C_pesanrs extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('M_pesanrs');
		$this->load->library(array('session'));
	}

	// menampilkan data rumahsakit
	function index(){
		$params = 'RS001';
		$data['pesan_rs'] = $this->M_pesanrs->getPesanRsById($params);
		$this->load->view('rumahsakit/listpesanrs', $data);
	}

 	// insert data pesan rs
	function insert($id_rs){
		$this->load->library("form_validation");
		$this->form_validation->set_rules('id_pesanrs','ID PESAN RS',"required");
		if ($this->form_validation->run() == false) {
			$data['rumahsakit']=$this->M_pesanrs->getPesanRsWhereIdRs($id_rs);
			$data['rumahsakit1']=$this->M_pesanrs->getPesanRsWhereIdPesanRs();
			$this->load->view('rumahsakit/pesanrs', $data);
		}else{
			$this->M_pesanrs->insertData();
			redirect('C_rumahsakit');
		}
	}

	 // edit data pesan rs
	function update($id_pesanrs){
		$this->load->library("form_validation");
		$this->form_validation->set_rules('id_pesanrs','ID PESAN RS',"required");
		if ($this->form_validation->run() == false) {
			$params = $id_pesanrs;
			$data['pesan_rs'] = $this->M_pesanrs->getDataById($id_pesanrs)[0];
			$this->load->view('rumahsakit/editpesanrs', $data);
		}else{
			$data = array(
				'id_pesanrs' => $this->input->post('id_pesanrs'),
				'id_rs' => $this->input->post('id_rs'),
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'tgl_pesan'=> $this->input->post('tgl_pesan'),
				'waktu_pesan' => $this->input->post('waktu_pesan')
			);
			$this->M_pesanrs->updateData($id_pesanrs, $data);
			redirect('C_pesanrs');
		}
	}

 	// delete data pesan rs
	function delete($id_pesanrs){
		$this->M_pesanrs->deleteData($id_pesanrs);
		redirect('C_pesanrs');
	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */