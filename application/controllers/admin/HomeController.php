<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("my");
        $this->auth->logged();
    }

    public function index()
    {
        $data = [
            "content" => 'admin/home'
        ];

        $this->load->view('template/admin/app', $data);
    }
}
