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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php 
			$frutas = $_GET["frutas"] ?? [];
			foreach($frutas as $fruta){
				echo "<li>{$fruta}</li>";
			}
			?>

            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>