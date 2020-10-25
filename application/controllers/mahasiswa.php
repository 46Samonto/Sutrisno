<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('mahasiswa_index');
	}
	// public function nama($parameter1,$parameter2)
	// {
	// 	echo "hallo tris,".$parameter1;
	// 	echo "";
	// }
}
