<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("my");
        $this->auth->auth();
    }

    public function login()
    {
        $data = [
            "content" => 'auth/login'
        ];

        $this->load->view('template/auth/app', $data);
    }
}
