<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talents extends CI_Controller {
    function __construct(){
        
        parent::__construct();
        $this->load->model('Talents_model');
        
        date_default_timezone_set('Asia/Manila');
        

        
    }  
	public function index()
	{
	
    
		$data['get_talents']=$this->Talents_model->get_talents();

		$this->load->view('templates/header');
		$this->load->view('talents', $data);

		$this->load->view('templates/footer');
		$this->load->view('talents_footer');
	}


}
