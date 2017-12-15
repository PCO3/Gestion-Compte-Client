<?php $this->load->helper('url'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/test.css">
    </head>

        <h1> Mise à jour réussie </h1>
       
        <form action="gestionClient" method="post">

            <input type="submit" value="Retour à la liste client" name="Retour">

        </form>

    </body>
</html>
