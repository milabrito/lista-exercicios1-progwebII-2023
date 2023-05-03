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
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="get"> 
				<label>O Preço Original:
					<input type="number"  name="precoOriginal" required>
				</label>

				<label>O preço Final:
					<input type="number"  name="precoFinal" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>