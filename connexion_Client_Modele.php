<?php

class Connexion_Client_Modele extends CI_Model
{

	//fonction pour lier les données de connexion à la base de données
	public function userLogin($pseudo, $password)
	{
		return $this->db->select('NomClient')
						->from('clientzodiac')
						->where('NomClient', $pseudo)
						->where('Password', $password)
						->limit(1)
						->get()
						->result();

	}

	public function modifyId($newPseudo, $oldPseudo)
	{
		//on vérifie que le nouveau pseudo n'est pas déjà utilisé
		$resultat = $this->db->select('NomClient')
							 ->from ('clientzodiac')
							 ->where('NomClient', $newPseudo)
							 ->get()
							 ->result();

		//si il n'existe pas
		if(is_null($resultat))
		{
			//mettre à jour le nom du client 
			$this->db->where('NomClient', $oldPseudo)
					 ->update('NomClient', $newPseudo);
			$message = 'mise à jour effectuée';
		}
		//Sinon on affiche un message d'erreur
		else
		{
			$message= 'le nom client existe déja dans la base de données';
		}

		return $message;
	}

	public function modifyPassword($oldPassword, $newPassword, $pseudo)
	{
		$this->db->where('NomClient', $pseudo)
				 ->where('password', $oldPassword)
				 ->from('clientzodiac')
				 ->update('password', $newPassword);
		return 'Mot de passe changé avec succès';
	}

	//public function deleteUser($pseudo)
		
	public function insertClient($pseudo, $Password, $email) //insérer client
	{
		$this->db->set('NomClient', $pseudo);
		$this->db->set('Password', $Password);
		$this->db->set('email', $email);
		$this->db->insert($this->clientzodiac);
		$message='Client inséré';
		return $message;
	}
}

?>
