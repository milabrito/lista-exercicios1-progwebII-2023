<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
        <meta charset="utf-8">
        <title>Questão 1</title>
    </head>
    <body>
        <h1>Comparação de números</h1>
        <form mathod="GET">
            <label for="num1">Numero 1:</label>
                <input type="number" name="num1" id="num1"><br>
            <label for="num2">Numero 2:</label>
                <input type="number" name="num2" id="num1">  <br>             
            <label for="num3">Numero 3:</label>
                <input type="number" name="num3" id="num1"><br>
            <button>Enviar</button>
            <hr>
        </form>

        <?php

            $n1 = $_GET["num1"] ?? 0;
            $n2 = $_GET["num2"] ?? 0;
            $n3 = $_GET["num3"] ?? 0;

            if($n1 > $n2 && $n1 > $n3){
                echo "<h3>O maior numero é {$n1}</h3>";
            }elseif($n2 > $n3){
                echo "<h3>O maior numero é {$n2}</h3>";
            }else{
                echo "<h3>O maior numero é {$n3}</h3>";
            }
            echo "<hr>";

            if($n1 < $n2 && $n1 < $n3){
                echo "<h3>O menor numero é {$n1}</h3>";
            }elseif($n2 < $n3){
                echo "<h3>O menor numero é {$n2}</h3>";
            }else{
                echo "<h3>O menor numero é {$n3}</h3>";
            }

        ?>
    </body>
</html>