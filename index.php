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
	<form action="search.php" method="get">
		<input type="text" name="card">
		<input type="submit">
	</form>
	<table>
	<?php
		//$clientes = DBRead('ncards','where Npower > 10', 'Nname');
		$clientes = DBPureQuery("SELECT Nname, Ncode, Ncode_magiccards FROM Nsets where 1");
		
		echo "<tr>";
		foreach ($clientes[1] as $key => $value) echo "<th>".$key."</th>";
		echo "</tr>";

		for ($i=0; $i < count($clientes); $i++) { 
			echo "<tr>";
			foreach ($clientes[$i] as $key => $value) {
				if($key=="Ncode_magiccards"){
					if (strpos("teste 15ANN AT ARC ARENA APAC BR BD UQC CP CLASH CSTD DM 8EB EURO FNMP GPX GURU HHO JR DCILM MGDC ORI MPRP MPL MBP PS PTC PRO REP ST ST2K SUM SUS TSTS THGT VMA WMCQ QRL GRC", $value) and !strpos("TESTE AP AN ARCS CS 8E FVE FVL GP PR SH TS US", $value)) {
						$rarity = "S";
					}else{
						$rarity = "R";
					}
					echo "<td><img src='http://www.ligamagic.com.br/images/emot/ed/".$value."_$rarity.gif' alt=''>$value</td>";
				}else{
					echo "<td>".$value."</td>";
				}
			}
			echo "</tr>";
		}
		//var_dump($clientes);
	?>
	</table>
</body>
</html>