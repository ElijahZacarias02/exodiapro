<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_calendar extends CI_Controller {
    function __construct(){
        
        parent::__construct();
        $this->load->model('Calendar_repository','repository');
        // 	  $this->load->library('Ciqrcode');
        
        date_default_timezone_set('Asia/Manila');
        

        
    }  
	public function index()
	{
	
		$this->load->view('templates/header');
        $data['event'] = $this->repository->queryEvent();
		$this->load->view('vw_calendar',$data);
		$this->load->view('templates/footer');
		
	}
    function load()
    {
        $event_data = $this->repository->fetch_all_event();
        foreach($event_data->result_array() as $row)
        {
            $data[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'start' => $row['start_event'],
                'end' => $row['end_event']
            );
        }
        echo json_encode($data);
    }
    
    function insert()
    {
        $dateTime = new DateTime($this->input->post('start'));
        $formatted_date = date_format($dateTime, 'm');
        if($this->input->post('title'))
        {
            $data = array(
                'name'  => $this->input->post('title'),
                'start_event'=> $this->input->post('start'),
                'end_event' => $this->input->post('end'),
            );
            $this->repository->insert_event($data);
        }
    }
    
    function update()
    {
        if($this->input->post('id'))
        {
            $data = array(
                'name'   => $this->input->post('title'),
                'start_event' => $this->input->post('start'),
                'end_event'  => $this->input->post('end')
            );
            
            $this->repository->update_event($data, $this->input->post('id'));
        }
    }
    
    function delete()
    {
        if($this->input->post('id'))
        {
            $this->repository->delete_event($this->input->post('id'));
        }
    }


}
