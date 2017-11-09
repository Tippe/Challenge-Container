<?php
class Ships extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('Ship_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        //$this->load->helper('date');
        $this->load->library('form_validation');
    }
 
    public function index(){
        $data['ships'] = $this->Ship_model->get_ships();
        $data['title'] = 'Ships';
 
        $this->load->view('templates/header', $data);
        $this->load->view('ships/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function create(){
        $date = new datetime('Y');
        $data['title'] = 'Create a Ship';
        $this->form_validation->set_rules('imo_number', 'IMO Number', 'required|exact_length[7]');
        $this->form_validation->set_rules('name', 'Ship Name', 'required');
        $this->form_validation->set_rules('build_year', 'Build Year', 'required|exact_lenght[4]');

        /*if($this->Ship_model->get_ships_by_id('build_year') > $date->format('Y')){
            $this->session->set_flashdata('buildyearerror', '<div class="alert alert-danger text-center">Build year is greater than this year</div>');
            redirect(base_url().'ships/index', $data);
        }*/

        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('ships/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Ship_model->set_ships();
            $this->session->set_flashdata('created', '<div class="alert alert-success text-center">Ship successfully created.</div>');
            redirect(base_url().'ships/index', $data);
        }
    }

    public function edit(){
        $id = $this->uri->segment(3);

        if (empty($id)){
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Edit a Ship';
        $data['ship'] = $this->Ship_model->get_ships_by_id($id);
        $this->form_validation->set_rules('imo_number', 'IMO Number', 'required');
        $this->form_validation->set_rules('name', 'Ship Name', 'required');
        $this->form_validation->set_rules('build_year', 'Build Year', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('ships/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Ship_model->set_ships($id);
            redirect(base_url().'ships/view/'.$id, $data);
        }
    }

    public function view($id){
        $data['ship'] = $this->Ship_model->get_ships_by_id($id);
        $data['title'] = 'Ship View';

        if (empty($data['ship'])){
            die('no ships found');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('ships/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function delete(){
        $id = $this->uri->segment(3);

        if (empty($id)){
            show_404();
        }

        $ship = $this->Ship_model->get_ships_by_id($id);
        $this->Ship_model->delete_ships($id);
        redirect(base_url('ships/index'));
    }
}