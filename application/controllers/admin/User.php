<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class User extends CI_Controller{
    public function User(){  
	    parent::__construct();
	    $this->load->model('user_model'); 
  }
    public function getMsg(){
  	   $phone = $_GET['phone'];
  	   $msg = $this->user_model->get_msg($phone);
       echo json_encode($msg);
    }
    public function sendEmail(){
        $pass = $this->user_model->change_pass();
        $email = $_GET['email'];
        $this->load->library('email'); // 引入email类
        // 配置选项
        $config['protocol'] = 'smtp'; // 使用smtp协议
        $config['smtp_host'] = 'smtp.126.com'; // smtp主机
        $config['smtp_user'] = 'chuangdian_keji@126.com'; // smtp用户
        $config['smtp_pass'] = 'wangtao123'; // 密码
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['crlf'] = "\r\n"; // 设置换行符
        $config['newline'] = "\r\n"; // 设置换行符
        $this->email->initialize($config); // 写入配置项

        $this->email->from('chuangdian_keji@126.com'); // 发送者
        $this->email->to($email); // 接收者

        $this->email->subject('找芯网用户更改密码通知'); // 主题
        $this->email->message('新的密码是'.$pass.'请尽快登录网站去修改密码'); // 内容

        echo $this->email->send();
    }
    public function test(){
  	    $this->load->view('admin/test');
    }
     public function index(){
         $this->load->view('admin/user');
     }
}