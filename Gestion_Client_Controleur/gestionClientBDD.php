<?php

class GestionClientBDD extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//connexion à la base de données par défaut dans la config (testcode)

		$this ->load -> database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('connexion_Client_Modele');
		//validation du formulaire
		$this -> ValidationDonnees();

		

	}

	public function ValidationDonnees()
	{

		//vérifier les données envoyées par l'utilisateur
		$role = $this->input->get('role');
		$id = $this->input->get('id');
		//Traiter les données en fonction du lien 
		if ($role=='modifier')
		{

			//faire afficher un formulaire de ce qu'il faut modifier

		}elseif($role == 'supprimer')
		{

			$this-> connexion_Client_Modele -> deleteClient($id);
			$liste = $this-> connexion_Client_Modele-> affichageclients();
			
			$this->load->view('Base_HTML/Header');
			$this->load->view('Gestion_Client/FormulaireGestion',array('clients' => $liste));

		}
	}
}
?>