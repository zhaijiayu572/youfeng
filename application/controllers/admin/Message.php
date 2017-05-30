<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('message_model');
    }
    public function get_message()
    {
        $rs = $this->message_model->count_all_message();
    }
    public function index(){
        $this->load->view('admin/test.php');
    }
}
