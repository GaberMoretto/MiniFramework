<?php

namespace App;
 use PDOException;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=mvc;charset=utf8",
				"root",
				"" 
			);
			
			return $conn;

		} catch (PDOException $e) {
			echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage() . '<br>';
            print_r(\PDO::getAvailableDrivers());
			exit;
		}
	}
}

?>