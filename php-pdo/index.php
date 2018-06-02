<?php

	require_once('base.php');

	// Creamos clase DB
	$db = new Database();

	$db->putPosts([3, 'Datos', 4]);		// Ej: INSERT
	$posts = $db->getAllPosts();		// Ej: SELECT

	// Muestra datos
	var_dump($posts);

?>
