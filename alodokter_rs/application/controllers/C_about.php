<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_about extends CI_Controller {

	public function index()
	{
		$this->load->view('about');
	}
}
