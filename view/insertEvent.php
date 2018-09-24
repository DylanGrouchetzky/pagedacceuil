<?php

if (isset($_POST['retour'])){
	header('Location: index.php?action=event');
}else if(isset($_POST['addEvent'])){
	if(!empty($_POST['jour']) && !empty($_POST['mois']) && !empty($_POST['message'])){
		$jour = htmlspecialchars($_POST['jour']);
		$mois = htmlspecialchars($_POST['mois']);
		$message = htmlspecialchars($_POST['message']);

		$date = $jour.'-'.$mois;
		$database->Insert('event (jour,message)', '(?,?)', array($date,$message));
		$success = 'Votre événement a bien était ajuoté';

	}else{
		$erreur = 'Tout les champs doivent être remplit';
	}
}

?>

<h1>Ajouté un événement</h1>
<p style="text-align: center;">Pour rajouter un événement, veuillez remplir les champs suivants: </p>
<form style="text-align: center;" method="post" action="">
	<table align="center">
		<tr>
			<td><label for="jour">Indiquer le jour en chiffre: </label></td>
			<td><input type="text" name="jour" id="jour"></td>
		</tr>

		<tr>
			<td><label for="mois">Indiquer le mois en chiffre: </label></td>
			<td><input type="text" name="mois" id="mois"></td>
		</tr>

		<tr>
			<td><label for="message">Indiquez le message: </label></td>
			<td><input type="text" name="message" id="message"></td>
		</tr>
	</table><?php if(isset($erreur)){ echo '<span style="color: red;">'.$erreur.'</span>'; } else if (isset($success)){ echo '<span style="color: green;">'.$success.'</span>'; } ?>
	<input type="submit" name="retour" value="retour">
	<input type="submit" name="addEvent" value="Ajouté Evénement">
</form>