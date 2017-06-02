<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Message_model extends CI_Model{
    public function count_all_message(){
        return $this->db->count_all_results("t_message");
    }
    public function get_message($index,$perPage){
        return $this->db->select('*')->from('t_message')->join('t_user','t_user.user_id=t_message.user_id')
            ->where('message_type',0)->limit($perPage,$index)->get()->result();
            
    }
    public function reply($user_id,$message_id,$replyContent){
        return $this->db->insert('t_message',array(
            "user_id"=>$user_id,
            "message_content"=>$replyContent,
            "message_title"=>"管理员回复",
            "reply_message_id"=>$message_id
        ));
    }
 }
?>
