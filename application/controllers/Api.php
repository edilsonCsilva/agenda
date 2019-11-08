<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Contato_model', 'ContatosModel');
    }

    public function index() {
        
    }

    public function getContatosAll() {

        $resultContatos = $this->ContatosModel->getContatosAll();
        $qtSexoMasculino = 0;
        $qtSexofeminino = 0;

        foreach ($resultContatos as $index => $contato) {
            $contato = (Array) $contato;
            if ($contato["sexo"] == "M") {
                $qtSexoMasculino++;
            } else {
                $qtSexofeminino++;
            }
        }
        echo(json_encode(array("contatos" => $resultContatos, "qtMasc" => $qtSexoMasculino, "qtFem" => $qtSexofeminino)));
    }

    public function getContatosBy($id) {
        $resultContatos = $this->ContatosModel->getContatosBy($id);
        echo(json_encode(array("contatos" => $resultContatos)));
    }

    public function delContato() {
         $codigo= $this->input->post('codigo');
         
         
         $responde = "";
         if($this->ContatosModel->delete($codigo)){
              $responde = array("erros" => false, "msn" => "Contato Excludo  Com Sucesso..!");
         }else{
              $responde = array("erros" => true, "msn" => "Falha ao Excluir Registro..!|");
         }
         
         
         
         echo json_encode($responde);
      
    }

    public function createContatos() {
        // var_dump($this->input->post());
        //id, nome, sexo, idade

        $responde = "";
        $erros = "";

        if (strlen(trim($this->input->post('indexTxtNome'))) == 0) {

            $erros .= "Campo de nome Obrigatorio..!|";
        }

        if (strlen(trim($this->input->post('indexTxtidade'))) == 0) {
            $erros .= "Campo de Idade Obrigatorio..!|";
        }

        if (!is_numeric($this->input->post('indexTxtidade'))) {
            $erros .= "Campo de Idade Invalido..!|";
        }

        if (strlen(trim($erros)) > 0) {
            $responde = array("erros" => true, "msn" => $erros);
            echo json_encode($responde);
            exit();
        }



        if (strlen(trim($this->input->post('_codigo_'))) > 0) {
            //Atualiza um Contato
            $contato = array("id" => $this->input->post('_codigo_'), "idade" => $this->input->post('indexTxtidade'), "sexo" => $this->input->post('indexOpSexo'));

            if ($this->ContatosModel->update($contato)) {
                $responde = array("erros" => false, "msn" => "Contato Atualizado  Com Sucesso..!");
            } else {
                $responde = array("erros" => true, "msn" => "Falha ao Atualizar Registro..!|");
            }
        } else {
            //Cria um Contato 
            $contato = array("nome" => $this->input->post('indexTxtNome'), "idade" => $this->input->post('indexTxtidade'), "sexo" => $this->input->post('indexOpSexo'));
            if ($this->ContatosModel->save($contato)) {
                $responde = array("erros" => false, "msn" => "Contato Cadastrado Com Sucesso..!");
            } else {
                $responde = array("erros" => true, "msn" => "Contado já Cadastrado..!|");
            }
        }

        echo json_encode($responde);
    }

}
