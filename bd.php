<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "saep_db";
    
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    //Verficação de erro de conexão
    if ($conexao->connect_error){
        die("Falha na conexão: " . $conexao->connect_error);
    }

    //Permitir acentuação
    $conexao->set_charset("utf8");
?>