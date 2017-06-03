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
    public function get_company($phone){
        $query = $this->db->query("select user_company from t_user where user_phone = {$phone}");
        $company = $query->row();
        return $company;
    }
    public function get_phone($phone){
        $query = $this->db->query("select user_phone from t_user where user_phone = {$phone}");
        $phone = $query->row();
        return $phone;
    }
    public function get_name($phone){
        $query = $this->db->query("select user_name from t_user where user_phone = {$phone}");
        $name = $query->row();
        return $name;
    }
    public function change_pass(){
        $new_pass = "";
        for($i=0; $i<6; $i++){
            $new_pass = $new_pass.rand(0,9);
        }
        return $new_pass;
    }
}