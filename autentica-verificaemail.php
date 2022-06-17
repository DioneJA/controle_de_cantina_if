<?php
    session_start();   
    include_once("aluno-verificaemail.php");

    $user = $_POST["email"];
    $ra = $_POST["ra"];
    $logins = validaUsuario($user, $ra);

    if($logins == null){ 
        $_SESSION['login'] = false; ?>
    
        <meta http-equiv="refresh" content="1; URL='verifica-email.php?mensagem=ui'"/>
    <?php }else{  
        $_SESSION['login'] = true;
        $_SESSION['test'] = $user;
    ?>
        <meta http-equiv="refresh" content="1; URL='altera-senha.php'"/>
    <?php    
 }
    exit(1);  

?>