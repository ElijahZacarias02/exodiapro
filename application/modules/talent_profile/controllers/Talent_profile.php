<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Talent_profile extends CI_Controller
{
	function __construct()
	{

		parent::__construct();
		$this->load->model('Talent_profile_model');
		$this->load->model('Artist_model');
		// 	  $this->load->library('Ciqrcode');

		date_default_timezone_set('Asia/Manila');



	}
	public function index()
	{
		$Id = $this->input->get('Id');
		

		$data['get_talents'] = $this->Talent_profile_model->get_talents();
		$data['get_talents_profile'] = $this->Talent_profile_model->get_talents_profile($Id);
		$data['group_social'] = $this->Talent_profile_model->group_social($Id);
		

		$data['member_social'] = $this->Talent_profile_model->member_social($Id);
		$data['member_details'] = array();

		foreach ($data['member_social'] as $rows) {

			$row[] = $this->Talent_profile_model->member_details($rows->ArtistID);
			$data['member_details'] = $row;
		}

		$this->load->view('templates/header');
		$this->load->view('talent_profile', $data);

		$this->load->view('templates/footer');
		
	}

	public function artist()
	{
		$TalentID = $this->input->get('TalentID');
		$ArtistID = $this->input->get('ArtistID');


		$data['get_talents_profile'] = $this->Artist_model->get_talents_profile($TalentID,$ArtistID);
		$data['member_social'] = $this->Artist_model->member_social($TalentID,$ArtistID);
		$data['get_gallery'] = $this->Artist_model->get_gallery($TalentID,$ArtistID);

		$this->load->view('templates/header');
		$this->load->view('artist', $data);
		$this->load->view('templates/footer');
		
	}



}