<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class User extends CI_Controller{
    public function __construct(){  
	    parent::__construct();
	    $this->load->model('user_model'); 
  } 
  	public function aa(){
  		$a = $this->user_model->get_data();
  		var_dump(json_encode($a));
  }
<<<<<<< HEAD
  public function test(){
    $this->load->view('admin/test.php');
  }
=======
    public function test(){
  	    $this->load->view('admin/test');
    }
>>>>>>> e81a7cea56a46f27c5a68cba1b107277d71574a6
}