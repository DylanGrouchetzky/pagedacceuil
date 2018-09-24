<?php

Class Database{

	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=pagedacceuil;charset=utf8', 'root', '');
		return $db;
	}

	public function Insert($tables, $value, $values){
		$db = $this->dbConnect();
		$add = $db->prepare('INSERT INTO '.$tables.' VALUES '.$value);
		$addraccourcie = $add->execute($values);
	}

	public function Query($table,$conditon = null){
		$db = $this->dbConnect();
		if($conditon == null){
			$list = $db->query('SELECT * FROM '.$table);
		}else{
			$list = $db->query('SELECT * FROM '.$table.' '.$conditon);
		}
		return $list;
	}

	public function Update($table,$colonne,$conditon,$valeur){
		$db = $this->dbConnect();
		$update = $db->prepare('UPDATE '.$table.' SET '.$colonne.' WHERE '.$conditon);
		$updatefinish = $update->execute($valeur);
	}
}