<?php
	require 'database.php';
	@$card = $_GET['card'];		//Consertar
	if(!$card) $card = "Garfield";
	$clientes = DBLike("Nname", $card);
?>
<html>
<head>
	<title>Teste de Conexão MySQLi</title>
	<meta charset="utf-8">
	<style>

	</style>
</head>
<body>
	<form action="search.php" method="get">
		<input type="text" name="card">
		<input type="submit">
		<span><?php
		echo count($clientes)." resultados";
		?></span>
	</form>
	<table>
	<?php
		//$clientes = DBRead('ncards','where Npower > 10', 'Nname');
		
		
		echo "<tr>";
		foreach ($clientes[0] as $key => $value) echo "<th>".$key."</th>";
		echo "</tr>";

		for ($i=0; $i < count($clientes); $i++) { 
			echo "<tr>";
			foreach ($clientes[$i] as $key => $value) {
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		//var_dump($clientes);
	?>
	</table>

</body>
</html>