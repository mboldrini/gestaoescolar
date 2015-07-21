<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Secretaria extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));

		$this->load->model('FuncoesUsuario');


	}
	
	public function index(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'secretaria'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');
		$perfil = $this->session->userdata('perfil');

		$data = array(
			'titulo' => 'Painel Administrativo - Gestão Escolar',
			'ondeEsta' => 'Painel',
			'descricao' => 'Você está no painel Principal!',
			'tela' => 'painel',
			'idUsuario' => $id,
			'perfil' => $perfil,
			'meuPerfil' => $this->FuncoesUsuario->meuPerfil($id)
		);

		$this->load->view('secretaria',$data);

	}


	public function perfil(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'secretaria'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');
		$perfil = $this->session->userdata('perfil');

		$data = array(
			'titulo' => 'Meu Perfil - Gestão Escolar',
			'ondeEsta' => 'Meu perfil',
			'descricao' => '',
			'tela' => 'perfil',
			'idUsuario' => $id,
			'perfil' => $perfil,
			'meuPerfil' => $this->FuncoesUsuario->meuPerfil($id)
		);

		$this->load->view('secretaria',$data);

	}

	public function mensagens(){

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'secretaria'){
			redirect(base_url().'login');
		}

		/* pega o Id_usuario que veio da sessio e joga pra variavel id */
		$id = $this->session->userdata('id_usuario');
		$perfil = $this->session->userdata('perfil');

		$data = array(
			'titulo' => 'Minhas mensagens - Gestão Escolar',
			'ondeEsta' => 'Minhas mensagens',
			'descricao' => 'aqui você vê todas as suas mensagens!',
			'tela' => 'mensagens',
			'idUsuario' => $id,
			'perfil' => $perfil,
			'meuPerfil' => $this->FuncoesUsuario->meuPerfil($id)
		);

		$this->load->view('secretaria',$data);

	}






}