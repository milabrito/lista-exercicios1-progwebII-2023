<?php
  $nome = $_GET["nome"] ?? " ";
  $data = ('H:i');
  $hora =  date('H:i');

  if($hora >= "05:00" && $hora <= "12:59"){
	$mensagem = "<p>Bom dia!</p>";
  }else if($hora >= "13:00" && $hora <= "18:59"){
	$mensagem = "<p>Boa Tarde!</p>";
  }else if($hora >= "19:00" && $hora <= "23:59"){
	$mensagem = "<p>Boa Tarde</p>";
  }else if($hora >= "00:00" && $hora <= "04:59"){
	$mensagem = "<p>Boa Madrugada!</p>";
  }

  

?>








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
			<p><?=$nome?>, <?=$mensagem?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>