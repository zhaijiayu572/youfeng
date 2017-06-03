<?php 
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Order extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model("order_model");
    }

    public function index(){
      $this->load->view("admin/admin_order.php");
    }

    public function allNum(){
      $value = $this->input->post("value");      
      $rs = $this->order_model->do_allNum($value);
      echo $rs;
    }

    public function getInfor(){
      $value = $this->input->post("value");
      echo $value;
    }


  }
?>