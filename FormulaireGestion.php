<!Doctype>
<html>

	<head>

		<title> BDD Client </title>
		<h1> Mise à jour de la base de données Client </h1>
	</head>

	<body> 

		<!-- il faut afficher trois boutons ajouter, modifier, supprimer -->

		<!---bouton Ajouter-->
		<input type="button" value="ajouter un client">

		</br>
		</br>
		</br>
		
			
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



