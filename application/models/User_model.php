<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model
{
	public function __construct(){  
        parent::__construct();  
    }
    /**
     * @param $phone
     * @return mixed
     */
    public function get_msg($phone){
        $this->db->select("*");
        $this->db->from("t_user");
        $this->db->where("user_phone = $phone");
        $query = $this->db->get()->result();
        if($query != []){
            return $query;
        }else{
            return false;
        }
    }
    public function change_pass(){
        $new_pass = "";
        for($i=0; $i<6; $i++){
            $new_pass = $new_pass.rand(0,9);
        }
        return $new_pass;
    }
}