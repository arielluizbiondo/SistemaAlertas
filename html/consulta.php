<?php
    include 'funcoes.php';
    if(!empty($_GET))
    {
        if ($_GET['acao']=='remove')
        {
            echo remover($_GET['id']);
        }
        if ($_GET['acao']=='limpar')
        {
            echo limpar();
        }

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consulta.css">
    <title>Consultar Alertas</title>
</head>
<body>
    <h2>Sistema alertas</h2>
    <fieldset>
        <table border="1px solid">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Setor</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if (empty($_SESSION['alertas'])) 
                {
                    echo '<tr>';
                    echo     '<td colspan="4"> Nenhuma alerta programada </td>'; 
                    echo '</tr>';
                }
                else
                {
                    foreach(listar() as $dados)
                    {
                        echo '<tr>';
                        echo '<td>' . $dados['nomeSetor']. '</td>';
                        echo '<td>' . $dados['data']. '</td>';
                        echo '<td><a href="consulta.php?acao=remove&id='.$dados['id'].'">Resolvido</a></td>';
                        echo '</tr>';
                    }
                }
            ?>
            </tbody>
        </table>
        <br><br>
        <a href="index.html">Voltar</a>
    </fieldset>
</body>
</html>