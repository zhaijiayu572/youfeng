<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email{

    function sendMail($to,$msg){
        include_once("PHPMailer/class.smtp.php");		// 引入php邮件类
        include_once("PHPMailer/class.phpmailer.php");		// 引入php邮件类
        $mail= new PHPMailer();
        $mail->CharSet = "utf-8"; 				// 编码格式
        $mail->IsSMTP();
        $mail->SMTPAuth   = true;                   // 必填，SMTP服务器是否需要验证，true为需要，false为不需要
        $mail->Host       = "smtp.126.com";         // 必填，设置SMTP服务器
        $mail->Port       = 465;                     // 设置端口
        $mail->Username   = "chuangdian_keji@126.com";  		    // 必填，开通SMTP服务的邮箱；任意一个163邮箱均可
        $mail->Password   = "wangtao123";         // 必填， 以上邮箱对应的密码
        $mail->SMTPSecure = 'ssl';                 //传输协议
        $mail->From       = "chuangdian_keji@126.com";    	  // 必填，发件人Email
        $mail->FromName   = "aaaa";             // 必填，发件人昵称或姓名
        $mail->Subject    = "bbbb";       	// 必填，邮件标题（主题）

        $mail->MsgHTML($msg);
        $mail->AddReplyTo("chuangdian_keji@126.com");			// 收件人回复的邮箱地址
        $mail->AddAddress($to); 		// 收件人邮箱
        $mail->IsHTML(true); 				// 是否以HTML形式发送，如果不是，请删除此行

        if(!$mail->Send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            echo "Message has been sent";
        }

    }
}