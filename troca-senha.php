<?php
    session_start();
    include_once("conecta.php");
    $senha = $_POST["senha"];
    $email = $_SESSION['test'];
    $sql  = "UPDATE aluno SET senha = '$senha' WHERE email LIKE '$email' ;";

    $conexao = abreConexao(); // Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
?>
    <meta http-equiv="refresh" content="1; URL='index.php?mensagem=ui'"/>
