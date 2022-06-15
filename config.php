<?php

    $dbHost = "Localhost";
    $dbUserName = "root";
    $dbPassword = "Brdeal1234";
    $dbName = "bdcantina";

    $conexao = new mysqli($dbHost,$dbUserName, $dbPassword, $dbName);

    $conexao->connect_errno;
    
?>