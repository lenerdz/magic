<?php
	require 'database.php';
	@$card = $_GET['card'];		//Consertar
	if(!$card) $card = "Garfield";
	$clientes = DBLike("Nname, Nset", $card);
?>
<html>
<head>
	<title>Teste de Conexão MySQLi</title>
	<meta charset="utf-8">
	<style>
        tr:hover{
            background-color: rgba(178, 255, 148, 0.500);
        }
        td>span {
            position: absolute;
            background-color: lightyellow;
            padding: 5px;
            left: -1000px;
            border: 1px dashed gray;
            visibility: hidden;
            color: black;
            text-decoration: none;
        }
        td:hover>span {
            visibility: visible;
            //top: 0;
            left: 0;
            z-index: 50;
        }
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
				$nome = str_replace(' ', '', $value);
				echo "<td>".$value."<span><img src=\"http://static.starcitygames.com/sales/cardscans/MTG/JUD/en/nonfoil/TestOfEndurance.jpg\"</span></td>";
			}
			echo "</tr>";
		}
		//var_dump($clientes);
	?>
	</table>

</body>
</html>