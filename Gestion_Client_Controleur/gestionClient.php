<?php
class GestionClient extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this -> load -> database();
		$this->affichage();
	}
	public function Affichage()
	{
		//charger les fonctions nécéssaires 
		$this-> load ->library('form_validation');
		$this -> load -> model('connexion_Client_Modele');
		
		//Validation du formulaire

			//Vérifier les données entrées par l'utilisateur 
			$rechercheClient=str_replace(" ","", htmlspecialchars( $this->input->get_post('RechercheClient')));

			$this->form_validation->set_rules('RechercheClient', 'recherche', 'trim|alpha|max_length[20]', 'caractères numériques seulement (20 max)');

		

		if($this->form_validation->run()== FALSE )
			{
				
				//mauvaise saisie de recherche, on réaffiche la page avec tous les clients
				$liste = $this-> connexion_Client_Modele-> affichageclients();
				$this-> load ->view('Base_HTML/Header');
				$this-> load-> view('Gestion_Client/FormulaireGestion', array('clients' => $liste));

			}
			else
			{
			//Traiter le champ recherche
				//Séparer si il y a une recherche ou pas 
					if(strlen($rechercheClient)==0)
					{

						//Pas de recherche donc on cherche tous les clients
						$liste = $this-> connexion_Client_Modele-> affichageclients();
						$this-> load ->view('Base_HTML/Header');
						$this-> load-> view('Gestion_Client/FormulaireGestion', array('clients' => $liste));

					}else
					{

						//Recherche donc on ne récupère que les clients qui nous intéressent
						$liste = $this-> connexion_Client_Modele-> rechercheClients($rechercheClient);
						$this-> load ->view('Base_HTML/Header');
						$this-> load-> view('Gestion_Client/FormulaireGestion', array('clients' => $liste));



					}
				}




	
	}
}
?>
