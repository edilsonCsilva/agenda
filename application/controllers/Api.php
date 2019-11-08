<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contato_model', 'ContatosModel');
    }

    public function index()
    { }

    public function getContatosAll()
    {

        $resultContatos =  $this->ContatosModel->getContatosAll();
        $qtSexoMasculino = 0;
        $qtSexofeminino = 0;

        foreach ($resultContatos as $index => $contato) {
            $contato=(Array)$contato;
            if ($contato["sexo"] == "M") {
                $qtSexoMasculino++;
                
            } else {
                $qtSexofeminino++;
            }
        }
        echo(json_encode(array("contatos" =>  $resultContatos, "qtMasc" => $qtSexoMasculino, "qtFem" => $qtSexofeminino)));
    }

    public function getContatosBy($id)
    {
        echo $id;
    }

    public function delContato($id)
    {
        echo "sssdd";
    }

    public function setContatos($contato)
    {
        echo "sssdd";
    }

    public function createContatos()
    {
        var_dump($this->input->post());
        
        //id, nome, sexo, idade
        
        $contato=array("nome"=>$this->input->post('indexTxtNome'),"idade"=>$this->input->post('indexTxtidade'),"sexo"=>$this->input->post('indexOpSexo'));
        $this->ContatosModel->save($contato);
                
    }
}
