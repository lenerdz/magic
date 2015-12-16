<?php
	require 'database.php';

	$nome = $_POST['name'];

	$data = array('nome' => $nome );

	$resultado = DBCreate("usuarios", $data);

	echo $resultado;
?>