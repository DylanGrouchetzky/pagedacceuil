<?php

if(isset($_POST['insert'])) {

	if(!empty($_POST['lien']) && !empty($_POST['picture']) && !empty($_POST['name'])) {

		$lien = htmlspecialchars($_POST['lien']);
		$picture = htmlspecialchars($_POST['picture']);
		$name = htmlspecialchars($_POST['name']);

		$database->Insert($name,$lien,$picture);
		unset($_POST['lien']);
		unset($_POST['picture']);
		unset($_POST['name']);
		$success = 'Votre raccourcie a bien été ajouté';

	}else{
		$erreur = 'Tous les champs ne sont pas remplit !';
	}
} else if(isset($_POST['retour'])){
	header('Location: index.php');
}


?>

<h1>Ajouté un raccourcie</h1>

<p>Pour rajouter un raccourcie, veuillez remplir les champs suivants: </p>

<form action="" method="POST">
	<table  align="center">
		<tr>
			<td><label for="lien">Lien du raccourcie: </label></td>
			<td><input type="text" name="lien" id="lien"></td>
		</tr>

		<tr>
			<td><label for="picture">Nom de l'image: </label></td>
			<td><input type="text" name="picture" id="picture"></td>
		</tr>

		<tr>
			<td><label for="name">Nom du raccourcie: </label></td>
			<td><input type="text" name="name" id="name"></td>
		</tr>
	</table>
	<br>
	<div style="text-align: center;">
		<?php if(isset($erreur)){ echo '<span style="color: red;">'.$erreur.'</span>'; } else if (isset($success)){ echo '<span style="color: green;">'.$success.'</span>'; } ?>
		<input type="submit" value="Retour" name="retour"><input type="submit" value="Ajouté" name="insert">
	</div>
</form>
