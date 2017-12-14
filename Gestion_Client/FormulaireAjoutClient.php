<?php $this->load->helper('url'); ?>

<!Doctype>
<html>

	<head>
		<meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/test.css">
		<title> BDD Client </title>
		<h1> Mise à jour de la base de données Client </h1>
	</head>


	<?php echo form_open(''); ?>

	<body> 

		<!-- il fatu afficher troi boutons ajouter, modifier, supprimer -->

		<!---bouton Ajouter-->
		<?php echo form_open('form'); ?>
			<p>
				<label for="User_name"> Nom d'utilisateur : </label>
				<input type="text" name="pseudo" id="User_name" value="<?php echo set_value('pseudo'); ?>" /> <!--On réaffiche son pseudo si il y eu une erreur de mdp -->
				<?php echo form_error('pseudo'); ?> <!--on affiche l'erreur si il y en a une pour le pseudo -->
			</p>
			<!-- Idem pour le mot de passe -->
			<p>
				<label for="password"> Mot de passe : </label> 
				<input type="password" name="password" id="password" />

				<?php echo form_error('password'); ?>
			</p>

			<!---Idem pour le mail -->

			<p>
				<label for="email"> Mail : </label> 
				<input type="text" name="email" id="email" value="<?php echo set_value('email');?>" />

				<?php echo form_error('password'); ?>
			</p>

			<p>
				<input type="submit" value="Valider"/>
				
			</p>

		</form>
		

	</body>

</html>

