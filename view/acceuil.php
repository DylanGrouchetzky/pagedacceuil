<?php echo "<h1>Bonjour Tryff nous sommes<br> le ".$view->Jour().' et il est : '.$view->Heure().'</h1>'; ?>
<p>Il n'y a rien de spécial aujourd'hui</p>
<div id="home">
	<div id="global">
		<?php $view->Raccourcie(); ?>
		<a href="index.php?action=insert"><img src="public/image/add.png" style="background: #c9c9c9;"></a>
		<a href="index.php?action=insert"><img src="public/image/add.png" style="background: #c9c9c9;"></a>
	</div>
</div>