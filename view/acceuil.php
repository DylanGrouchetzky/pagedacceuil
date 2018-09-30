<?php echo "<h1>Bonjour Tryff nous sommes<br> le ".$view->Jour().' et il est : '.$view->Heure().'</h1>'; ?>
<div class="para">
	<p>
		<?= $view->Event(); ?>
		<a href="index.php?action=event" style="float: right;"><img src="public/image/add.png" title="Ajouté un événement" style="height: 20px; width: 20px;"></a>
	</p>
</div>
<div id="home">
	<div id="global">
		<?php 
		$view->Raccourcie(); 
		$view->Option();
		?>
	</div>
</div>