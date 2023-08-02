<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Talents_profile_model extends CI_Model{
  
    function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Manila');
  }
  
  
  
  
	function get_talents(){

		$query =   $this->db->query("SELECT * FROM `talents`");
		
		return $query->result();
		
}


function get_talents_profile($Id){
        
        
	$query =   $this->db->query('SELECT tbl2.Id,tbl1.Id,tbl1.TalentGroup,tbl1.Name,tbl1.Image FROM `talents_profile`as tbl1
			LEFT JOIN talents as tbl2
			ON tbl1.TalentGroup=tbl2.Id
			');
	
	return $query->result();
	
	
}
  
  
}
