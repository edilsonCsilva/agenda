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
        
         $this->db->insert('contato',$contato);
        
        
    }



}