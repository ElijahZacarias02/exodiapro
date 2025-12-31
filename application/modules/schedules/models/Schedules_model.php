<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Schedules_model extends CI_Model{
  
    function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Manila');
  }
  
  
  function get_schedules(){

		$query =   $this->db->query("SELECT * FROM `schedules` where status='Active'");
		
		return $query->result();
		
}

  
  

  
  
}