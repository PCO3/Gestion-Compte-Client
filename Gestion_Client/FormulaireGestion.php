<?php $this->load->helper('url'); ?>

<!Doctype>
<html>

	<head>
		<meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/test.css">
		<title> BDD Client </title>
	</head>

	<body> 
		
		<!--- Champs de recherche pour les noms clients -->
		<form action = "" method = "post" align="center">
         	<?php echo validation_errors(); ?>
			<input type="search" placeholder="Entrez un mot-clé" name="RechercheClient" >
			<?php echo form_error('recherche'); ?>
		</form>
		<br/>
		<br/>


		<table BORDER="1" align="center" cellpadding="5">

		    <tr>
		        <th > Identifiant </th>
		        <th> Nom du client </th>
		        <th> Email </th>
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
						echo $info->email;
						echo "</td>";	?>

					</tr>
				
					
				<?php
				}?>	
 
		</table>

		<p><a href="gestionClient"> Revenir à la liste client </a></p>

	</body>

</html>

