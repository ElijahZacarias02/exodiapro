<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sponsors_model extends CI_Model{
  
    function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Manila');
  }
  
  
  function get_sponsors(){

		$query =   $this->db->query("SELECT * FROM `sponsors` where Status= 1");
		
		return $query->result();
		
}

  
  

  
  
}