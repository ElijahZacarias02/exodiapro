<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Artist_model extends CI_Model{
  
    function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Manila');
  }
  
  





  function get_talents_profile($TalentID,$ArtistID)
  {
    $this->db->select('tbl2.Id, tbl1.Id, tbl1.TalentID, tbl1.Name, tbl1.Image, tbl1.ArtistID, tbl1.Description');
    $this->db->from('talents_profile as tbl1');
    $this->db->join('talents as tbl2', 'tbl1.TalentID = tbl2.Id', 'LEFT');
    $this->db->where('tbl1.TalentID', $TalentID); // Add condition for TalentID
    $this->db->where('tbl1.ArtistID', $ArtistID); // Add condition for ArtistID
    $this->db->limit(1);
    
  
      $query = $this->db->get();
      return $query->result();
  }
  

  
  function get_gallery($TalentID, $ArtistID)
  {
      $this->db->where('TalentID', $TalentID);
      $this->db->where('ArtistID', $ArtistID);

      
      $query = $this->db->get('gallery');
      
      return $query->result();
  }
  
  
  



  function member_social($TalentID,$ArtistID)
  {

    $this->db->where('TalentID', $TalentID);
    $this->db->where('ArtistID', $ArtistID);
    $this->db->where('Widget !=', "");

    
    $query = $this->db->get('socials');
    
    return $query->result();

  }



  
  
}