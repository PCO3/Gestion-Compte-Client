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

		<!-- il fatu afficher troi boutons ajouter, modifier, supprimer -->

		<!---bouton Ajouter-->
		<form action="ajouterClient" method="post">

			<input type="submit" value="ajouter un client" name="Ajouter">

		</form>

	

	</body>

</html>

