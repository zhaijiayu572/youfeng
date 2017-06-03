<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Order_model extends CI_Model{
      public function do_allNum($value){
        $this->db->like('order_no', $value);
        $this->db->from('t_order');
        return $this->db->count_all_results();
      }
  }
?>