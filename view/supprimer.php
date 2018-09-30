<h1>Supprimer un Raccourcie</h1>

<?php

$listRaccourcie = $database->Query('application','ORDER BY id');
echo '<div style="width:60px; border: 1px black solid; margin: auto; text-align: center;"><a href="index.php">Retour</a></div>';
echo '<table align="center">';
while ($data = $listRaccourcie->fetch()) {
	echo '<tr>';
		echo '<td><img src="public/image/'.$data['Picture'].'" title="'.$data['Name'].'"></td>';
		echo '<td><a href="index.php?action=confirmation&id='.$data['id'].'"><img src="public/image/supprimer.png"></a></td>';
	echo '</tr>';
}
echo '</table>';