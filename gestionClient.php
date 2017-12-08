<?php

class GestionClient extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this ->load -> database();
		$this->miseAJour();
	}

	public function miseAJour()
	{
		$this->load->library('form_validation');
		$this -> load -> model('connexion_Client_Modele');
		$this -> load -> view('FormulaireGestion');
		
		
		}
}

?>
