<?php

	$n = $_POST["n"] ?? 0 ;

	$result = 0;

	for($i = 1; $i <= $n; $i++){

		$result += $i;

	}

?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Quarta questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

	<header>
		<h1>Formulário para soma de números de 1 a N</h1>
	</header>

	<div class="container">

		<div class="box resposta">

			<h2>Soma de 1 a N</h2>

			<?php	echo "Soma dos números 1 a {$n} = {$result}"?>

            <a href="index.php" class="link">Voltar</a>

		</div>

	</div>

</body>
</html>