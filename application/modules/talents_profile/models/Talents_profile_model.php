<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');


class Talents_profile_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Manila');
	}




	function get_talents()
	{

		$query = $this->db->query("SELECT * FROM `talents`");
		return $query->result();

	}


	function get_talents_profile($Id)
	{


		$query = $this->db->query('SELECT tbl2.Id,tbl1.Id,tbl1.TalentID,tbl1.Name,tbl1.Image FROM `talents_profile`as tbl1
			LEFT JOIN talents as tbl2
			ON tbl1.TalentID=tbl2.Id
			');

		return $query->result();
	}


	function group_social($Id)
	{

		$query = $this->db->query("SELECT * FROM `socials` WHERE TalentID='" . $Id . "' AND Remarks='Group'");

		return $query->result();

	}


	function member_social($Id)
	{

		$query = $this->db->query("SELECT * FROM `socials` WHERE TalentID='" . $Id . "' AND Remarks='Member' GROUP BY MemberID ");

		return $query->result();

	}


	function member_details($Id)
	{

		$query = $this->db->query('SELECT tbl1.Id, tbl1.MemberID,tbl1.Link, tbl1.Social,tbl1.Icon, tbl2.Id,tbl2.Image FROM `socials`as tbl1
	LEFT JOIN talents_profile as tbl2
	ON tbl1.MemberID=tbl2.Id
	WHERE  tbl1.MemberID= "' . $Id . '" ');

		return $query->result();

	}


	// function member_social_icon($Id){

	// 	$query =   $this->db->query('SELECT tbl1.Id FROM `socials`as tbl1
// 	LEFT JOIN talents_profile as tbl2
// 	ON tbl1.MemberID=tbl2.Id
// 	WHERE Remarks="Member"');

	// 	return $query->result();

	// }




}