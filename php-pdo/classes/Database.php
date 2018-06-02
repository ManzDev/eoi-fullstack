<?php

	// Clase de gestión de base de datos
	class Database {

		private $pdo = NULL;					// Objeto PDO
		private $engine = 'mysql';				// Tipo de motor de base de datos
		private $host = 'localhost';			// Máquina donde está la base de datos (localhost=actual)
		private $dbname = 'exampledb';			// Base de datos a trabajar

		// Constructor (abre la conexión a la base de datos)
		public function __construct() {
			$this->pdo = new PDO("{$this->engine}:host={$this->host};dbname={$this->dbname}", Config::USER, Config::PASSWORD);
		}

		// Obtiene todos los campos de la tabla Posts
		public function getAllPosts() {
			$query = $this->pdo->query('SELECT * FROM posts');
			return $query->fetchAll(PDO::FETCH_ASSOC);
 		}

		// Inserta todos los campos en la tabla Posts
		public function putPosts($fields) {
			$query = $this->pdo->prepare('INSERT INTO posts (id, post, uid) VALUES (?, ?, ?)');
			$query->execute($fields);
		}

	}	

?>