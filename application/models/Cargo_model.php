<?php 
class Cargo_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_cargo(){
        $query = $this->db->get('cargo');
        return $query->result_array();
    }
    
    public function get_cargo_by_id($id = 0){
        if ($id === 0){
            $query = $this->db->get('cargo');
            return $query->result_array();
        }
        $query = $this->db->get_where('cargo', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_cargo($id = 0){
        $data = array(
            'container_type' => $this->input->post('container_type'),
            'amount' => $this->input->post('amount'),
            'weight' => $this->input->post('weight'),
        );
        if ($id == 0) {
            return $this->db->insert('cargo', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('cargo', $data);
        }
    }
    
    public function delete_cargo($id){
        $this->db->where('id', $id);
        return $this->db->delete('cargo');
    }
}