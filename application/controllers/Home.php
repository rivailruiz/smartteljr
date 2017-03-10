<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
    	$this->load->model('home_model');
    	$servicos = $this->home_model->buscaTodos('servicos');
    	$parceiros = $this->home_model->buscaTodos('parceiros');
        $dados = array('servicos' => $servicos, 'parceiros' => $parceiros);
    	$this->load->template("home/home.php", $dados);

	}
}