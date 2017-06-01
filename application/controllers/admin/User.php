<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class User extends CI_Controller{
    public function User(){  
	    parent::__construct();
	    $this->load->model('user_model'); 
  } 
  	public function email(){
  		$this->load->library('email');
  		$this->email->sendMail('939408507@qq.com',"8520");
  }
    public function test(){
  	    $this->load->view('admin/test');
    }
     public function index(){
         $this->load->view('admin/user');
     }
}