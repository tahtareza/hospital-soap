<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanrs extends CI_Model{
	var $soap_client;
	function __construct()
	{
		$this->soap_client = new SoapClient("http://localhost:8080/soap_alodokter/alodokter_server/AloSoapServer?wsdl");
	}

	public function getData()
	{
		return json_decode($this->soap_client->getData(json_encode(array("table"=>"pesan_rs"))));
		
	}
	public function getDataById($id)
	{
		$this->db->where('id_pesanrs',$id);
		$query = $this->db->get("pesan_rs");
		return $query->result_array();
	}
	public function insertData($data)
	{
		$insert = $this->soap_client->insertData(json_encode(array("table"=>"pesan_rs","data"=>$data)));
		
	}
	public function updateData($id, $data)
	{	
		$this->soap_client->updateData(json_encode(array("table"=>"pesan_rs","primary_key"=>"id_pesanrs","id"=>$id,"data"=>$data)));
		
	}
	public function deleteData($id)
	{
		$this->soap_client->deleteData(json_encode(array("table"=>"pesan_rs
			","primary_key"=>"id_pesanrs","id"=>$id)));
		
	}

	public function getPesanRsWhereUname($uname){
		$query=$this->db->query("SELECT * FROM pesan_rs where username='$uname'");
		return $query->result();
	}

	public function getPesanRsWhereIdRs($id){
		$query=$this->db->query("SELECT * FROM pesan_rs where id_rs='$id'");
		return $query->result();
	}

}
?>
