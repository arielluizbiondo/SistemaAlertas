<?php 
    session_start();
    $alertas = empty($_SESSION['alertas']) ? array() : $_SESSION['alertas'];
    $id = empty($_SESSION['id']) ? 0 : $_SESSION['id'];
    
    function cadastrar($nomeSetor)
    {
            global $alertas;
            global $id;
            array_push($alertas, array
            (
                'id' => $id,
                'nomeSetor' => $nomeSetor,
                'data' => date('j/m/y H:i'),
                )
            );
            $_SESSION['alertas']=$alertas;
            $id++;
            $_SESSION['id'] = $id;
            return 'Cadastrado com sucesso!';
    }//Cadastrando

    function listar()
    {
        global $alertas;
        return $alertas;
    }

    function remover($id)
    {
        global $alertas;
        $pos = array_search($id, array_column($alertas, 'id'));
        if($pos >=0)
        {
            array_splice($alertas, $pos, 1);
        }
        $_SESSION['alertas']=$alertas;
        return 'Alerta removida com sucesso!';
    }//remove

    function limpar()
    {
        session_destroy();
        return 'Dados removidos com sucesso!';
    }


?>