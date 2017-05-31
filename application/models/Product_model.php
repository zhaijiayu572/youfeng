<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    //获取总行数
    public function do_getAllnum(){
        return $this->db->count_all('t_product');
    }
    //获取产品、传分页参数
    public function get_product($page,$perpage){
        $this->db->limit($perpage,($page-1)*$perpage);
        $this->db->select("*");
        $this->db->from("t_product");
        $this->db->order_by('product_id','ASC');
        $query = $this->db->get();
        return $query->result();
    }
}

?>