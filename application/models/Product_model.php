<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function do_getAllnum(){
        return $this->db->count_all('t_product');
    }
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