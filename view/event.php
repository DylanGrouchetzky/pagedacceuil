<?php

if(isset($_POST['retour'])){
	header('Location: index.php');
}else if(isset($_POST['insertEvent'])){
	header('Location: index.php?action=insertEvent');
}

?>

<h1>Liste des Evenement</h1>
<form style="text-align: center;" action="" method="post">
	<input type="submit" name="retour" value="retour">
	<input type="submit" name="insertEvent" value="Ajouté Evenement">
</form>
<?php
$view->ListEvent();

