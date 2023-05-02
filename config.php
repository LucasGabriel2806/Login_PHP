<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'etecjau';
    $dbName = 'formulario-php';
    $dbPort = '3307';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName,$dbPort);

    /*
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "conexão efetuada com sucesso";
    }
    */

?>