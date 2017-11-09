<?php 
class Ship_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_ships(){
        $query = $this->db->get('ships');
        return $query->result_array();
    }
    
    public function get_ships_by_id($id = 0){
        if ($id === 0){
            $query = $this->db->get('ships');
            return $query->result_array();
        }
        $query = $this->db->get_where('ships', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_ships($id = 0){
        $data = array(
            'imo_number' => $this->input->post('imo_number'),
            'name' => $this->input->post('name'),
            'build_year' => $this->input->post('build_year'),
        );
        if ($id == 0) {
            return $this->db->insert('ships', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('ships', $data);
        }
    }
    
    public function delete_ships($id){
        $this->db->where('id', $id);
        return $this->db->delete('ships');
    }
}