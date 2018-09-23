<?php

Class Database{

	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=pagedacceuil;charset=utf8', 'root', '');
		return $db;
	}

	public function Insert($name, $lien, $picture){
		$db = $this->dbConnect();
		$add = $db->prepare('INSERT INTO application (Name,Lien,Picture) VALUES (?,?,?)');
		$addraccourcie = $add->execute(array($name, $lien, $picture));
	}
}