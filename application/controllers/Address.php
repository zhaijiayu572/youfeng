<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Address extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('address_model');
    }
    public function add_addr(){
//        $this->load->model('address_model');
        $user_id = 1;//$this->session->userdata('user'); //设置的session的格式暂定
        $addr_company = 'baidu';//$this->input->post('company');
        $addr_name = 'laoli';//$this->input->post('name');
        $addr_phone = '123123312';//$this->input->post('phone');
        $addr_addr = '东风南路';//$this->input->post('addr');
        $rs = $this->address_model->add_addr($user_id,$addr_company,$addr_name,$addr_phone,$addr_addr);
        if($rs){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
    public function delete_addr(){
        $addr_id = $this->input->get('addr_id');
        $rs = $this->address_model->delete_addr($addr_id);
        if($rs){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
}