<?php

require ('class/autoloader.php');
Autoloader::register();
$view = new View;
$database = new Database;

ob_start();
if (isset($_GET['action'])) {
	require ('view/'.$_GET['action'].'.php');
}else{
	require ('view/acceuil.php');
}

$content = ob_get_clean();

require ('view/default.php');