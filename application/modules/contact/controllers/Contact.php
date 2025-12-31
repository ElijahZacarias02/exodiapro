<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    function __construct(){
        
        parent::__construct();
        $this->load->model('Contact_model');
        // 	  $this->load->library('Ciqrcode');
        
        date_default_timezone_set('Asia/Manila');
        

        
    }  
	public function index()
	{
	

	    
		$this->load->view('templates/header');
		$this->load->view('contact');

		$this->load->view('templates/footer');
		$this->load->view('contact_footer');
	}

// save contact_form
    public function save_contact()
    {
        
        $this->Contact_model->save_contact();
        
        
    }

}
