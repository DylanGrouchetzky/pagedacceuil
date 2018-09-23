<?php

Class View extends Database{

	public function Jour(){
		$moisChiffrer = date('m');
		switch ($moisChiffrer) {
			case '1':
				$mois = 'Janvier';
				break;
			case '2':
				$mois = 'Février';
				break;
			case '3':
				$mois = 'Mars';
				break;
			case '4':
				$mois = 'Avril';
				break;
			case '5':
				$mois = 'Mai';
				break;
			case '6':
				$mois = 'Juin';
				break;
			case '7':
				$mois = 'Juillet';
				break;
			case '8':
				$mois = 'Aout';
				break;
			case '9':
				$mois = 'Septembre';
				break;
			case '10':
				$mois = 'Octobre';
				break;
			case '11':
				$mois = 'Novembre';
				break;
			case '12':
				$mois = 'Décembre';
				break;
			default:
				$mois = 'Probléme de détection du mois';
				break;
		}
		$date = date('d');
		$dates = $date.' '.$mois;
		return $dates;
	}

	public function Heure(){
		$heure = date('H:i');
		return $heure;
	}

	public function Raccourcie(){
		$db = $this->dbConnect();
		$list = $db->query('SELECT * FROM application ORDER BY id');

		while ($data = $list->fetch()) {
			echo '<a href="'.$data['Lien'].'"><img src="public/image/'.$data['Picture'].'" title="'.$data['Name'].'"></a>';
		}
	}

}