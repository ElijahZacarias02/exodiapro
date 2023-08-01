<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    function __construct(){
        
        parent::__construct();
        $this->load->model('About_model');
        // 	  $this->load->library('Ciqrcode');
        
        date_default_timezone_set('Asia/Manila');
        

        
    }  
	public function index()
	{
	

	    
		$this->load->view('templates/header');
		$this->load->view('about');

		$this->load->view('templates/footer');
		$this->load->view('about_footer');
	}


}
