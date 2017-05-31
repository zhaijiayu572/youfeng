<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller{
   public function __construct()
   {
       parent::__construct();
       $this->load->model('Product_model');
   }
    public function chun(){
       $allnum = $this->Product_model->do_getAllnum();
       $page = $this->uri->segment(4)==null?1:$this->uri->segment(4);
//        var_dump($page);
//        die();
        $this->load->library('pagination');
        $url="admin/product/chun";
        $page_size = 10;
        $config['base_url'] = $url;
        $config['total_rows'] = $allnum;
        $config['per_page'] = $page_size;
        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open'] = '<div class="page">';
        $config['full_tag_close'] = '</div>';
        $config['num_tag_open'] = '<span class="pagenum">';
        $config['num_tag_close'] = '</span>';

        $config['first_link'] = '第一页';
        $config['prev_link'] = '上一页';
        $config['next_link'] = '下一页';
        $config['last_link'] = '最后一页';
        $this->pagination->initialize($config);


//        $data = $this->Product_model->get_product();
        $data=$this->Product_model->get_product($page,$config['per_page']);
        $rs['product'] = $data;
        $this->load->view('admin/chun',$rs);
    }


}