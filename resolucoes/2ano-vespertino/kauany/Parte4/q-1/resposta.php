<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

				$frutas = $_POST["frutas"] ?? [];

				echo "<h3>Suas frutas favoritas são:<br></h3>";
				foreach($frutas as $fruta){
					echo "<h3>".$fruta."<br></h3>";
				}

			?>
            <a href="formulario.html" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>