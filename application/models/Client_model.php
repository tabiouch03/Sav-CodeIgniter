<?php 

class client_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    //////////////////////////////////////////////////////
    // Recupere les infos dans la BDD en fonction de l'id
    //////////////////////////////////////////////////////

    public function get_client(int $id = 0)
    {
        if ($id <= 0) {
            $query = $this->db->get('client');
            return $query->result_array();
        } 
        $query = $this->db->get_where('client', array('clientId' => $id));
        return $query->row_array();
    }

    public function setClient($id = 0){

        if($id <= 0 ){
            // insert
            $data = array(
                'nomClient' => $this->input->post('nomClient'),
                'numClient' => $this->input->post('numClient'),
                'adresse' => $this->input->post('adresse'),
                'numTel' => $this->input->post('numTel'),
                'mail' => $this->input->post('mail'),
            );

            if($id <= 0) {
                $query = $this->db->insert('client', $data);
                return $query;
            }
        }

            // update
            $this->db->where('clientId', $id);
            $query = $this->db->update('client', $data);
            return $query;

    }
}