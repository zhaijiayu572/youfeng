<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('message_model');
    }
    public function get_all_unreply_num(){       //获取所有未回复私信的数量
        $allNum = $this->message_model->count_all_unreply_message();
        echo $allNum;
    }
    public function get_message(){   
        $perPage = $this->input->get('perPage');
        $index = $this->input->get('index');
        $index = $index*$perPage;        //获取真正的偏移量
        $rs = $this->message_model->get_message($index,$perPage);
        echo json_encode($rs);
    }
    public function reply(){         //处理回复的消息
        $user_id = $this->input->post('user_id');
        $replyContent = $this->input->post('replyContent');
        $message_id = $this->input->post('message_id');
        $rs = $this->message_model->reply($user_id,$message_id,$replyContent);
        if($rs){
            $rs = $this->message_model->update_status($message_id);    //更新用户的消息的状态
            if($rs){
                echo "success";
            }else{
                echo "fail";
            }
            
        }else{
            echo "fail";
        }
    }
    public function delete(){     //删除私信
        $message_id = $this->input->get('message_id');
        $rs = $this->message_model->delete($message_id);
        if($rs){
            echo "success";
        }else{
            echo "fail";
        }
    }
    public function index(){
        $this->load->view('admin/test.php');
    }
}
