<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talents_profile extends CI_Controller {
    function __construct(){
        
        parent::__construct();
        $this->load->model('Talents_profile_model');
        // 	  $this->load->library('Ciqrcode');
        
        date_default_timezone_set('Asia/Manila');
        

        
    }  
	public function index()
	{
		$Id =  $this->input->get('Id');
		


		
		$data['get_talents']=$this->Talents_profile_model->get_talents();
		$data['get_talents_profile']=$this->Talents_profile_model->get_talents_profile($Id);
		$data['group_social']=$this->Talents_profile_model->group_social($Id);
		$data['member_social']=$this->Talents_profile_model->member_social($Id);

        $data['logos'] = array();
		
		foreach($data['member_social'] as $rows){

			$row[] = $this->Talents_profile_model->member_social_icon($rows->MemberID);
			$data['logos'] = $row;
		}
	var_dump( $data['logos'][0][0]);
		
		$data['member_social_icon']=$this->Talents_profile_model->member_social_icon($Id);

		

		$this->load->view('templates/header');
		$this->load->view('talents_profile',$data);

		$this->load->view('templates/footer');
		$this->load->view('talents_profile_footer');
	}


}
