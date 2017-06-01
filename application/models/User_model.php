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
    public function get_email($phone)
    {           
        $query = $this->db->query("select user_email from t_user where user_phone = {$phone}");
        $email = $query->row();
        return $email;
    }
    public function get_pass($phone){
        $query = $this->db->query("select user_pass from t_user where user_phone = {$phone}");
        $pass = $query->row();
        return $pass;
    }
    public function change_pass(){
        $new_pass = "";
        for($i=0; $i<6; $i++){
            $new_pass = $new_pass.rand(0,9);
        }
    }
}