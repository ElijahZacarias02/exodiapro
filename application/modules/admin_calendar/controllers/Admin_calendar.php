<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_calendar extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('Calendar_repository', 'repository');
        // 	  $this->load->library('Ciqrcode');

        date_default_timezone_set('Asia/Manila');



    }
    public function index()
    {

        $this->load->view('templates/header');

        $data['event'] = $this->repository->queryEvent();
        $this->load->view('vw_calendar', $data);
        $this->load->view('templates/footer');

    }
    public function new_calendar()
    {
        $this->load->view('templates/header');
        $data['event'] = $this->repository->queryEvent();
        $data['talents'] = $this->repository->getTalents();
        $this->load->view('new_calendar', $data);
        $this->load->view('templates/footer');

    }
    public function calendar()
    {

        $this->load->view('templates/header');
        $data['event'] = $this->repository->queryEvent();
        $data['talents'] = $this->repository->getTalents();
        $this->load->view('calendar', $data);
        $this->load->view('templates/footer');

    }

    function insert()
    {

        $this->output->enable_profiler(false);
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[55]');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[255]');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('start_event', 'Time start', 'required');
        $this->form_validation->set_rules('end_event', 'Time end', 'required');

        $success = $this->form_validation->run($this);
        if ($success) {
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'start_event' => $this->input->post('date') . ' ' . $this->input->post('start_event'),
                'end_event' => $this->input->post('date') . ' ' . $this->input->post('end_event'),
            );
            $this->repository->insert_event($data);

            $data['response'] = "true";
            $data['errors'] = "Successfully insert";

        } else {
            $data['response'] = "false";
            $data['errors'] = validation_errors();


        }
        echo json_encode($data);

    }





















    public function view_event($id)
    {
        $data = $this->repository->view_ticket($id);

        echo json_encode($data);
    }

    function load()
    {
        $event_data = $this->repository->fetch_all_event();
        foreach ($event_data->result_array() as $row) {
            $data[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'start' => $row['start_event'],
                'end' => $row['end_event']
            );
        }
        echo json_encode($data);
    }



    function update()
    {
        if ($this->input->post('id')) {
            $data = array(
                'name' => $this->input->post('title'),
                'start_event' => $this->input->post('start'),
                'end_event' => $this->input->post('end')
            );

            $this->repository->update_event($data, $this->input->post('id'));
        }
    }

    function delete()
    {
        if ($this->input->post('id')) {
            $this->repository->delete_event($this->input->post('id'));
        }
    }


}