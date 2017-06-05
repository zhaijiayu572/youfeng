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
      $value = $this->input->post("value");      //模糊查询条件
      $rs = $this->order_model->do_allNum($value);
      echo $rs;
    }

    public function searchInfor(){
      $value = $this->input->post("value");//模糊查询条件
      $pageNum = $this->input->post("pageNum");//每页显示的数量
      $page = $this->input->post("page");
      $rs = $this->order_model->do_searchInfor($value,$pageNum,$page);
      echo json_encode($rs);
    }

    public function allDel(){
      $value = $this->input->post("value");
      echo $value;
    }

    public function del(){
      $value = $this->input->post("value");
      echo $value;
    }
  }
?>