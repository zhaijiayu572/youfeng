<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Address_model extends CI_Model
{
    public function add_addr($uid,$company,$name,$phone,$addr){
        $data = array(
            'user_id'=>$uid,
            'addr_company'=>$company,
            'addr_name'=>$name,
            'addr_phone'=>$phone,
            'addr_addr'=>$addr
        );
        return $this->db->insert('t_address', $data);
    }
    public function delete_addr($addr_id){
        return $this->db->delete('t_address',array('addr_id'=>$addr_id));
    }
}