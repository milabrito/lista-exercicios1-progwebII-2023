<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Primeira questão</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<header>

		<h2>Campo do formulário para o maior número</h1>

	</header>

	<div class="container">

		<div class="box formulario">

			<h2>Formulário para descobrir maior e menor número</h2>

			<form action="resposta.php" method="post">

				<label>Insira o primeiro número aqui:
					<input type="number" id="num1" name="num1" required>

				</label>

				<label>Insira o segundo número aqui:
					<input type ="number" id="num2" name="num2" required> 

				</label>

				<label>Insira o terceiro número aqui:
					<input type ="number" id="num3" name="num3" required> 

				</label>

				<button name="enviar"> Enviar </button>

			</form>

		</div>	

	</div>

</body>
</html>