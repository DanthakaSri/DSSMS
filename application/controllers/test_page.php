<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_page extends CI_Controller {

	public function index()
	{
		$data['page'] = 'test_page';
		$data['title'] = 'Test Page | w3Capsule';
		$data['description'] = '';
		$this->load->view('template',$data);
	}

}