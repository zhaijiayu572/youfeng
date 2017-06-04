<?php
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Order_model extends CI_Model{
      public function do_allNum($value){
        $this->db->like('order_no', $value);
        $this->db->from('t_order');
        return $this->db->count_all_results();
      }

      public function do_searchInfor($value,$pageNum,$page){
        $offset = ($page-1)*$pageNum;
        if($value==""){
           $sql ="select t_order.*,t_user.user_accout,t_user.user_company from t_order , t_user where t_order.user_id = t_user.user_id and t_order.order_no  limit $offset,$pageNum";
        }else{
          $sql ="select t_order.*,t_user.user_accout,t_user.user_company from t_order , t_user where t_order.user_id = t_user.user_id and t_order.order_no like '%$value%' limit $offset,$pageNum";          
        }
        return $this->db->query($sql)->result();
      }
  }
?>