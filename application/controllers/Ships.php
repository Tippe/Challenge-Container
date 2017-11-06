<?php
class Ships extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('Ship_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
 
    public function index(){
        $data['title'] = 'Ships';
 
        $this->load->view('templates/header', $data);
        $this->load->view('ships/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function create(){
        $data['title'] = 'Create a Ship';
        $this->form_validation->set_rules('imo_number', 'IMO Number', 'required');
        $this->form_validation->set_rules('name', 'Ship Name', 'required');
        $this->form_validation->set_rules('build_year', 'Build Year', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('ships/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Ship_model->set_ship();
            $this->session->set_flashdata('created', '<div class="alert alert-success text-center">Ship successfully created.</div>');
            redirect(base_url().'/ships/index', $data);
        }
    }

    public function edit(){
        $id = $this->uri->segment(3);

        if (empty($id)){
            show_404();
        }

        $data['title'] = 'Edit a Ship';
        $data['ships'] = $this->Ship_model->get_ships_by_id($id);
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