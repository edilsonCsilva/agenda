<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contato_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getContatosAll() {

        $resultados = $this->db->query("SELECT * FROM contato ");
        return $resultados->result();
    }
    
    
    public function getContatosBy($id) {

        $resultados =$this->db->select('*')->where('id', $id)->limit(1)->get('contato');
        return $resultados->result();
    }

    public function save($contato) {
        $query = $this->db->select('id')->where('nome', $contato["nome"])->limit(1)->get('contato');
        if (count($query->result()) == 0) {
            $this->db->insert('contato', $contato);
            return true;
        }
        return false;
    }

    public function update($contato) {

        $this->db->where('id',$contato['id']);
        $this->db->set('sexo', $contato['sexo']);
        $this->db->set('idade', $contato['idade']);
        $this->db->update('contato');
        if ($this->db->trans_status() === true) {
            $this->db->trans_commit();
            return true;
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }
    
    
    
      public function delete($id) {

        $this->db->where('id',$id);
        $this->db->delete('contato');
        if ($this->db->trans_status() === true) {
            $this->db->trans_commit();
            return true;
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }
    
    
    

}
