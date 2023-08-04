<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');


class Calendar_repository extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Manila');
  }

  function queryEvent()
  {
    $this->db->order_by('id');
    return $this->db->get('calendar')->result_array();
  }
  function getTalents()
  {
    $this->db->order_by('id');
    return $this->db->get('talents')->result_array();
  }

  function insert_event($data)
  {
    $query = $this->db->insert('calendar', $data);

    return $query;
  }
























  public function view_ticket($id)
  {
    $this->db->select('*');

    $this->db->from('calendar');
    $this->db->where('id', $id);
    $query = $this->db->get();

    return $query->row_array();
  }

  function fetch_all_event()
  {
    $this->db->order_by('id');
    return $this->db->get('calendar');
  }



  function update_event($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('calendar', $data);
  }

  function delete_event($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('calendar');
  }




}