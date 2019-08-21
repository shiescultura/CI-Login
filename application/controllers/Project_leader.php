<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_Leader extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}

	function index() {
		if($this->session->userdata('level')==='2') {
			$this->load->view('projleader_view');
		} else {
			echo "Access Denied!";
		}
	}

}