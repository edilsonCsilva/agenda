<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Contato_model extends CI_Model {


    public function __construct() {
        parent::__construct();
        $this->load->database();

    }

    public function getContatosAll()
    {
    	
        $resultados = $this->db->query("SELECT * FROM contato ");
        return $resultados->result();
    }

    public function save($contato) {
        $query = $this->db->select('id')-> where('nome', $contato["nome"])-> limit(1)-> get('contato');
        if(count($query->result())==0){
            $this->db->insert('contato',$contato);
            return true;
        }
        return false;
    }



}