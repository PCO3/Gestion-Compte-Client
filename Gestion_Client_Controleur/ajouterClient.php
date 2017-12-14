<?php

class AjouterClient extends CI_Controller
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

		
		//Rêgle des champs du formulaire
		

		$this->form_validation->set_rules('pseudo', 'Nom d\'utilisateur', 'trim|required|min_length[5]|max_length[20]|alpha_dash','pseudo requis');
    	$this->form_validation->set_rules('password', 'mot de passe','required', 'mot de passe requis');
    	$this->form_validation->set_rules('email', 'Mail', 'required|valid_email');

    	//Récupération des données du formulaire

    	$identifiant = $this->input->get_post('pseudo');
    	$motDePasse =  $this->input->get_post('password');
    	$email = $this->input->get_post('email');

    	//données auxquelles il faut comparer
    	$tabEmail=$this-> connexion_Client_Modele -> allEmail();
    	$tabId=$this-> connexion_Client_Modele -> allId();
		$uniqueId= $this-> connexion_Client_Modele -> uniqueId($identifiant, $tabId);
		$uniqueEmail=$this-> connexion_Client_Modele -> uniqueEmail($email, $tabEmail);

    	//validation du formulaire 

    	if($this->form_validation->run()== FALSE)
			{
				//	Le formulaire est invalide ou vide
				$this->load->view('/Base_HTML/header');
				$this->load->view('Gestion_Client/FormulaireAjoutClient');

			}

			elseif($this->form_validation->run() and ($uniqueId==FALSE or $uniqueEmail==FALSE))

			{
				//	Le formulaire est valide, mais l'id ou le mail existe deja dans la base de données
				$this->load->view('/Base_HTML/header');
           		$this->load->view('Gestion_Client/FormulaireAjoutClientErreur');
			}
			else
			{
				//Données valides, on rentre le nouveau client dans la BDD

				$message = $this->connexion_Client_Modele->insertClient($identifiant, $motDePasse, $email);

				//on affiche la confirmation à l'administrateur
				$this->load->view('/Base_HTML/header');
           		$this->load->view('Gestion_Client/SuccesMiseAJourBDD');
			}
	}
}
?>