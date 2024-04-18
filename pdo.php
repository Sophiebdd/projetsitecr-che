<?php
	function connexionBDD() {
		$servername = "localhost";
		$dbname = "formcreche";
		$username = "root";
		$password = "";
		try {
			$connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Vous êtes connecté<br>";
		} catch(PDOException $e) {
			echo "La connexion a échouée: ".$e->getMessage()."<br>";
		return $connexion;
		}
	}
?>