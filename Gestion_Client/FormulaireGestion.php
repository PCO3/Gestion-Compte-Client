<?php $this->load->helper('url'); ?>

<!Doctype>
<html>

	<head>
		<meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/test.css">
		<title> BDD Client </title>
		<h1> Mise à jour de la base de données Client </h1>
	</head>

	<body> 

		<!-- il faut afficher trois boutons ajouter, modifier, supprimer -->

		<!---bouton Ajouter-->
		<form action="Gestion_Client/ajouterClient" method="post">

			<input type="submit" value="ajouter un client" name="Ajouter">

		</form>
	
			
		<table BORDER="1">
			<CAPTION> Comptes Client </CAPTION> 

		    <tr>
		        <th> Identifiant </th>
		        <th> Nom du client </th>
		        <th> Mot de passe </th>
		        <th> Email </th>
				<th> Modifier </th>
				<th> Supprimer </th>
		    </tr>
	     
	 
		    <?php
					
				foreach ($clients->result() as $info){
					echo "<tr>";
						echo "<td>";
						echo $info->identifiant;
						echo "</td>";
						echo "<td>";
						echo $info->NomClient;
						echo "</td>";
						echo "<td>";
						echo $info->Password;
						echo "</td>";
						echo "<td>";
						echo $info->email;
						echo "</td>";			
					
						echo "</tr>";
				}
		 
		        
				?>
 
		</table>


	</body>

</html>
