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
    public function getMsg(){
  	   $email   = $this->user_model->get_email(7)->user_email;
       $company = $this->user_model->get_company(7)->user_company;
       $phone   = $this->user_model->get_phone(7)->user_phone;
       $name    = $this->user_model->get_name(7)->user_name;
       $new_pass= $this->user_model->change_pass();
       $msg = ['email'=>$email,'company'=>$company,'phone'=>$phone,'name'=>$name];
       print_r($msg);
    }
    public function test(){
  	    $this->load->view('admin/test');
    }
     public function index(){
         $this->load->view('admin/user');
     }
}