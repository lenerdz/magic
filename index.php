<?php
	require 'database.php';
?>
<html>
<head>
	<title>Teste de Conexão MySQLi</title>
	<meta charset="utf-8">
	<style>

	</style>
</head>
<body>
	<table>
	<?php
		//$clientes = DBRead('ncards','where Npower > 10', 'Nname');
		$clientes = DBPureQuery('SELECT Nname, Nset, Npower FROM Ncards where Npower > 10');
		
		echo "<tr>";
		foreach ($clientes[1] as $key => $value) echo "<th>".$key."</th>";
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