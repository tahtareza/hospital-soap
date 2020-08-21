<?php
Class C_rumahsakit extends CI_Controller{

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="http://localhost/alodokter_server/index.php";
	}

 // menampilkan data rumahsakit
	function index(){
		$data['rumahsakit'] = json_decode($this->curl->simple_get($this->API.'/C_rumahsakit'));
		$this->load->view('rumahsakit/list',$data);
	}

// // insert data rumahsakit
// 	function create(){
// 		if(isset($_POST['submit'])){
// 			$data = array(
// 				'nim' => $this->input->post('nim'),
// 				'nama' => $this->input->post('nama'),
// 				'id_jurusan'=> $this->input->post('jurusan'),
// 				'alamat' => $this->input->post('alamat'));
// 			$insert = $this->curl->simple_post($this->API.'/rumahsakit', $data,
// 				array(CURLOPT_BUFFERSIZE => 10));
// 			if($insert)
// 			{
// 				$this->session->set_flashdata('hasil','Insert Data Berhasil');
// 			}else
// 			{
// 				$this->session->set_flashdata('hasil','Insert Data Gagal');
// 			}
// 			redirect('rumahsakit');
// 		}else{
// 			$data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
// 			$this->load->view('rumahsakit/create',$data);
// 		}
// 	}

//  // edit data rumahsakit
// 	function edit(){
// 		if(isset($_POST['submit'])){
// 			$data = array(
// 				'nim' => $this->input->post('nim'),
// 				'nama' => $this->input->post('nama'),
// 				'id_jurusan'=> $this->input->post('jurusan'),
// 				'alamat' => $this->input->post('alamat'));
// 			$update = $this->curl->simple_put($this->API.'/rumahsakit', $data,
// 				array(CURLOPT_BUFFERSIZE => 10));
// 			if($update)
// 			{
// 				$this->session->set_flashdata('hasil','Update Data Berhasil');
// 			}else
// 			{
// 				$this->session->set_flashdata('hasil','Update Data Gagal');
// 			}
// 			redirect('rumahsakit');
// 		}else{
// 			$data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
// 			$params = array('nim'=> $this->uri->segment(3));
// 			$data['rumahsakit'] = json_decode($this->curl->simple_get($this->API.'/rumahsakit',$params));
// 			$this->load->view('rumahsakit/edit',$data);
// 		}
// 	}

//  // delete data rumahsakit
// 	function delete($nim){
// 		if(empty($nim)){
// 			redirect('rumahsakit');
// 		}else{
// 			$delete = $this->curl->simple_delete($this->API.'/rumahsakit', array('nim'=>$nim),
// 				array(CURLOPT_BUFFERSIZE => 10));
// 			if($delete)
// 			{
// 				$this->session->set_flashdata('hasil','Delete Data Berhasil');
// 			}else
// 			{
// 				$this->session->set_flashdata('hasil','Delete Data Gagal');
// 			}
// 			redirect('rumahsakit');
// 		}
// 	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */