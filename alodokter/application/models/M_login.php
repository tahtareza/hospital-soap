<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	function cek_login($username, $password){
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		return $this->db->get()->row();
	}

	// function namaDosen($uname){
	// 	$this->db->select('*');
	// 	$this->db->from('dosen');
	// 	$this->db->where('nip', $uname);
 //        return $this->db->get()->row();
	// }
}
 ?>
