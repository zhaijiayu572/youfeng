<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Message_model extends CI_Model{
    public function count_all_message(){
        return $this->db->count_all_results("t_message");
    }
    
 }
?>
