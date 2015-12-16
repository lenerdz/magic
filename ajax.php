<?php
	require 'database.php';

	$nome = $_POST['name'];

	$data = array('nome' => $nome );

	$resultado = DBCreate("usuario", $data);

	echo $resultado;
?>