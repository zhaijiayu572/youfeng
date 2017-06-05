<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5
 * Time: 16:44
 */
class Index extends CI_Controller
{
    public function Index()
    {
        parent::__construct();
    }
    public function head(){
        $this->load->view('index');
    }
}