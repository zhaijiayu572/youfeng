<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class User extends CI_Controller{
    public function User(){  
	    parent::__construct();
	    $this->load->model('user_model'); 
  } 
  	public function aa(){
  		$a = $this->user_model->get_data();
  		var_dump(json_encode($a));
  }
}