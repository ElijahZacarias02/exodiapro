<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_profile extends CI_Controller {
    function __construct(){
        
        parent::__construct();
        $this->load->model('Member_profile_model');
        // 	  $this->load->library('Ciqrcode');
        
        date_default_timezone_set('Asia/Manila');
        

        
    }  
	public function index()
	{
	

	    
		$this->load->view('templates/header');
		$this->load->view('member_profile');

		$this->load->view('templates/footer');
		$this->load->view('member_profile_footer');
	}


}
