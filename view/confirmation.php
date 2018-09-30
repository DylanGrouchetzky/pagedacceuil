<?php

if(isset($_POST['yes'])){
	$database->Delete('application', 'id ='.$_GET['id']);
	header('Location: index.php');
}else if (isset($_POST['no'])){
	header('Location: index.php?id='.$_GET['id']);
}

?>

<h1>Confirmation</h1>

<p style="text-align: center;">Etes-vous sur de vouloir supprimer se raccourcie?</p>

<div style="text-align: center;">
	<?php 
	$list = $database->Query('application', 'WHERE id='.$_GET['id']);
	while($data = $list->fetch()){
		echo '<img src="public/image/'.$data['Picture'].'">';
	}
	?>
</div>
<form style="text-align: center;" method="post" action="index.php?action=confirmation&id=<?= $_GET['id'] ?>">
	<input type="submit" name="yes" value="oui">
	<input type="submit" name="no" value="non">
</form>