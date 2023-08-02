<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Talents_model extends CI_Model{
  
    function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Manila');
  }
  
  

	function get_talents(){

		$query =   $this->db->query("SELECT * FROM `talents`");
		
		return $query->result();
		
}

  
  
  
}
