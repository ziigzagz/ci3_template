<?php
defined('BASEPATH') or exit('No direct script access allowed');

include(APPPATH.'controllers\API\TestAPI.php');

class Home extends TestAPI
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
    }
    public function index()
    {
        $this->load->view('css');
        $this->load->view('js');
        $this->load->view('Home');
    }
    public function get_data()
    {
  
    }
    public function insert_data()
    {

    }
}
