<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rumahsakit extends CI_Model {

	var $soap_client;
	function __construct()
	{
		$this->soap_client = new SoapClient("http://localhost:8080/soap_alodokter/alodokter_server/AloSoapServer?wsdl");
	}

	public function getData()
	{
		return json_decode($this->soap_client->getData(json_encode(array("table"=>"rumah_sakit"))));
		
	}
	public function getDataById($id)
	{
		$this->db->where('id_rs',$id);
		$query = $this->db->get("rumah_sakit");
		return $query->result_array();
	}
	public function insertData()
	{
		$data = array(
			'id_rs' => $this->input->post('id_rs'),
			'nama_rs' => $this->input->post('nama_rs'),
			'alamat_rs' => $this->input->post('alamat_rs'),
			'tlp_rs' => $this->input->post('tlp_rs')
		);
		$insert = $this->soap_client->insertData(json_encode(array("table"=>"rumah_sakit","data"=>$data)));
		
	}
	public function updateData($id)
	{
		$data = array(
			'id_rs' => $this->input->post('id_rs'),
			'nama_rs' => $this->input->post('nama_rs'),
			'alamat_rs' => $this->input->post('alamat_rs'),
			'tlp_rs' => $this->input->post('tlp_rs')
		);
		
		$this->soap_client->updateData(json_encode(array("table"=>"rumah_sakit","primary_key"=>"id_rs","id"=>$id,"data"=>$data)));
		
	}
	public function deleteData($id)
	{
		$this->soap_client->deleteData(json_encode(array("table"=>"rumah_sakit
			","primary_key"=>"id_rs","id"=>$id)));
		
	}
}