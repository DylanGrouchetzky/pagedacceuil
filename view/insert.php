<?php

if(isset($_POST['insert'])) {

	if(!empty($_POST['lien']) && !empty($_FILES['picture']) && !empty($_POST['name'])) {
		if($_FILES['picture']['error'] == 0){
			if($_FILES['picture']['size'] <= 5000000){
				$infosfichier = pathinfo($_FILES['picture']['name']);
				$extension_upload = $infosfichier['extension'];
				$extension_autoriser = array('jpg', 'jpeg', 'gif', 'png');
				if(in_array($extension_upload, $extension_autoriser)){
					move_uploaded_file($_FILES['picture']['tmp_name'], 'public/image/'.basename($_FILES['picture']['name']));
					$lien = htmlspecialchars($_POST['lien']);
					$name = htmlspecialchars($_POST['name']);
					$database->Insert('application (Name,Lien,Picture)','(?,?,?)',array($name,$lien,basename($_FILES['picture']['name'])));
					$success = 'Votre raccourcie a bien été ajouté';
				}
			}
		}
	}else{
		$erreur = 'Tous les champs ne sont pas remplit !';
	}
} else if(isset($_POST['retour'])){
	header('Location: index.php');
}

?>

<h1>Ajouté un raccourcie</h1>

<p style="text-align: center;">Pour rajouter un raccourcie, veuillez remplir les champs suivants: </p>

<form action="" method="POST" enctype="multipart/form-data">
	<table  align="center">
		<tr>
			<td><label for="lien">Lien du raccourcie: </label></td>
			<td><input type="text" name="lien" id="lien"></td>
		</tr>

		<tr>
			<td><label for="picture">Nom de l'image: </label></td>
			<td><input type="file" name="picture" id="picture"></td>
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