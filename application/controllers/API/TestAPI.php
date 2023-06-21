<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestAPI extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        
    }
    public function get_data()
    {
		$data = array();
		for ($i=0; $i < 10000; $i++) { 
			# code...
			$data[] = $_REQUEST['username'];
			$data[] = $_REQUEST['password'];
		}

		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
    }
}
