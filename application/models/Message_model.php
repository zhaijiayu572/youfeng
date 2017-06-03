<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Message_model extends CI_Model{
    public function count_all_unreply_message(){
        return $this->db->from('t_message')->where('message_type',0)->where('status',0)
            ->count_all_results();
    }
    public function get_message($index,$perPage){
        return $this->db->select('*')->from('t_message')->join('t_user','t_user.user_id=t_message.user_id')
            ->where('message_type',0)->where('status',0)->limit($perPage,$index)->get()->result();
            
    }
    public function reply($user_id,$message_id,$replyContent){
        return $this->db->insert('t_message',array(
            "user_id"=>$user_id,
            "message_content"=>$replyContent,
            "message_title"=>"管理员回复",
            "reply_message_id"=>$message_id,
            "message_type"=>1
        ));
    }
    public function update_status($message_id){
        return $this->db->where('message_id',$message_id)->update('t_message',array('status'=>1));
    }
    public function delete($message_id){
        return $this->db->delete("t_message",array(
            "message_id"=>$message_id
        ));
    }
 }
?>
