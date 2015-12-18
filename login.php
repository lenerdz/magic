<html>
	<head>
		<title>Teste de Rolling Background</title>
		<meta charset="utf-8">
		<style>
			body{
				background-image: url("img/rollingback.png");
				animation: animatedBackground 1000s linear infinite;
			}
			@keyframes animatedBackground {
				from { background-position: 0 1000%; }
				to { background-position: 0 0; }
			}
		</style>
	</head>
	<body>
		
	</body>
</html>