<?php

namespace App\Database;

final readonly class Database
{
	
	public static function Connect(){
		try {
			$user = getenv('DB_USERNAME'); 
			$pass = getenv('DB_PASSWORD'); 
			$dbName = getenv('DB_NAME');
			$host = getenv('DB_HOST'); 
			$connexion = new \PDO("mysql:host=$host;dbname=$dbName;charset=UTF8", $user, $pass);
		} catch (\Exception $exception) {
			echo 'Erreur lors de la connexion à la base de données : ' . $exception->getMessage();
			exit;
		}
		return $connexion;
	}
}
