<?php
include 'funcoes.php';
    if(!empty($_GET))
    {   
        echo cadastrar($_GET['botao']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consulta.css">
    <title>Simular Alertas</title>
</head>
<body>
    <h2>Sistema de alertas</h2>
    <fieldset>
        <form action="" method="get">
            <center>
                <input type="submit" value="SALA" class="botao" name="botao">
                <input type="submit" value="GARAGEM" class="botao" name="botao">
                <br>
                <input type="submit" value="QUARTO" class="botao" name="botao">
                <input type="submit" value="COZINHA" class="botao" name="botao">
            </center>
        </form>
        <a href="index.html">Voltar</a>
    </fieldset>
</body>
</html>