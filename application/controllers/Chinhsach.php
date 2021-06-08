<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chinhsach extends CI_Controller {
	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->data['com']='chinhsach';
        $this->load->model('frontend/Mcategory');
    }
    
	public function index(){
        $this->data['title']='AppPhakeStore.vn - Policy';
        $this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);
	}
}
