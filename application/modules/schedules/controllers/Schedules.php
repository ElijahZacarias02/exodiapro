<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedules extends CI_Controller {
    function __construct(){
        
        parent::__construct();
        $this->load->model('Schedules_model');
        date_default_timezone_set('Asia/Manila');
        

        
    }  
	public function index()
	{
	
	    $data['get_schedules']=$this->Schedules_model->get_schedules();
        
		$this->load->view('templates/header');
		$this->load->view('schedules', $data);
        $this->load->view('templates/footer');
	
	}


}