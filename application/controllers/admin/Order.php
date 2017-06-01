<?php 
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Order extends CI_Controller{
    public function __construct(){
      parent::__construct();
      //$this->load->model("");
    }

    public function index(){
      $this->load->view("admin/admin_order.php");
    }
  }
?>