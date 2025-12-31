<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sponsors extends CI_Controller {
    function __construct(){
        
        parent::__construct();
        $this->load->model('Sponsors_model');
        date_default_timezone_set('Asia/Manila');
        

        
    }  
	public function index()
	{
	
	    $data['get_sponsors']=$this->Sponsors_model->get_sponsors();
        
		$this->load->view('templates/header');
		$this->load->view('sponsors', $data);
        $this->load->view('templates/footer');
	
	}


}