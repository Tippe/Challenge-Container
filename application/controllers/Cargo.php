<?php
class Cargo extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('Cargo_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        //$this->load->helper('date');
        $this->load->library('form_validation');
    }
 
    public function index(){
        $data['cargo'] = $this->Cargo_model->get_cargo();
        $data['title'] = 'Cargo';

        if($this->session->userdata('user_logged') == TRUE) {
            $this->load->view('templates/header', $data);
            $this->load->view('cargo/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/footer');
        }
    }
    
    public function create(){
        $data['title'] = 'Create Cargo';
        $this->form_validation->set_rules('container_type', 'Container Type', 'required');
        $this->form_validation->set_rules('amount', 'Amount', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');

        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('cargo/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Ship_model->set_cargo();
            $this->session->set_flashdata('created', '<div class="alert alert-success text-center">Cargo successfully created.</div>');
            redirect(base_url().'cargo/index', $data);
        }
    }

    /*public function edit(){
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
        $this->form_validation->set_rules('max_capacity', 'Max Capacity', 'required');

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
    }*/
}