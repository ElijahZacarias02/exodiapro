<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Contact_model extends CI_Model{
  
    function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Manila');
  }
  
  // save contact form to contact_us table
  function save_contact()
  {
      $this->form_validation->set_rules('subject', 'Subject', 'required');
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('surname', 'Surname', 'required');
      $this->form_validation->set_rules('contact', 'Contact', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('message', 'Message', 'required');


      
      if ($this->form_validation->run() == FALSE){
          
          $output = $this->form_validation->error_string();
          
      } else{
          
 
          
          $data=array(
              'subject'      => $this->input->post('subject'),  
              'name'         => $this->input->post('name'),
              'surname'      => $this->input->post('surname'),
              'contact'      => $this->input->post('contact'),
              'email'        => $this->input->post('email'),
              'message'      => $this->input->post('message'),
              
          );
          
          $this->db->insert('contact_us',$data);
          
                
          $output = 'success';
          
  
      }
  
  echo json_encode($output);
  }
  
  
}
