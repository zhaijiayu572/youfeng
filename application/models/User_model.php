<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model
{
	public function User_model(){  
        parent::__construct();  
    }
    public function get_data()  
    {           
        $query = $this->db->get('t_user');  
        return $query;  
    }   
}