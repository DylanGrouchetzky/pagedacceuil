<?php
if(isset($_POST['envoyer'])){
	// test si le fichier est envoyer et si il y a une erreur
	if(isset($_FILES['picture']) && $_FILES['picture']['error'] == 0){
		// test si le fichier est trop gros
		if($_FILES['picture']['size'] <= 5000000){
			// Verification de l'extension de fichier
			$infosfichier = pathinfo($_FILES['picture']['name']);
			$extension_upload = $infosfichier['extension'];
			$extension_autoriser = array('jpg', 'jpeg', 'gif', 'png');
			if (in_array($extension_upload, $extension_autoriser)){
				//Validation
				move_uploaded_file($_FILES['picture']['tmp_name'], 'public/image/background/'.basename($_FILES['picture']['name']));
				$database->Update('settings', 'backgroundimage = :newbackground', 'id=1', array('newbackground' => basename($_FILES['picture']['name'])));
				$succes = 'L\'envoie a bien été effectué';
			}
		}
	}
}else if(isset($_POST['retour'])){
	header('Location: index.php');
}

?>

<h1>Settings</h1>
<form action="" method="post" enctype="multipart/form-data" style="text-align: center;">
	<table align="center">
		<tr>
			<td><label for="picture">Image de fond: </label></td>
			<td><input type="file" name="picture" id="picture"></td>
		</tr>
	</table>
	<input type="submit" value="Retour" name="retour">
	<input type="submit" value="Envoyer" name="envoyer">
	<?php if(isset($succes)){ echo $succes; }; ?>
</form>