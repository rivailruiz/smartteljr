<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller{
    public function main(){
    	$this->load->model('sobre_model');
    	$servicos = $this->sobre_model->buscaTodos('servicos');    	
        $dados = array('servicos' => $servicos);
    	$this->load->template("sobre/sobre.php", $dados);

	}
}