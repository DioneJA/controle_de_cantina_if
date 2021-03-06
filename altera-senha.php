<?php
// session_start inicia a sessão
session_start();
if ($_SESSION['login'] == true) {
} else {

    header("Location:verifica-email.php?mensagem=nl");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFSULDEMINAS - Alterar senha</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="shortcut icon" href="img/faveicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/header-signin-signup.css">
    <link rel="stylesheet" href="style/cadastro.css">
</head>

<body>
    <header>
        <div id="logo">
            <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
        </div>
    </header>
    <main>
        <form action="troca-senha.php" method="POST" class="container">

            <div class="imagem">
                <img src="img/imglogin.png" alt="Logo ifsuldeminas">
            </div>
            <h1>Alterar senha</h1>
            <div class="linha"></div>
            <div class="login">
                <input type="password" name="senha" id="senha" placeholder=" " required>
                <label class="senha-label"><i class="fa-solid fa-lock"></i> Nova senha</label>
                <button type="button" id="exibe-senha1" style="background-image: url('img/olho-vermelho.png');"></button>
            </div>
            <div class="login">
                <input type="password" name="senha-confirmada" id="senha-confirmada" placeholder=" " required>
                <label class="senhaConfirmada-label"><i class="fa-solid fa-lock"></i> Confirme a sua senha</label>
                <button type="button" id="exibe-senha2" style="background-image: url('img/olho-vermelho.png');"></button>
            </div>
            <div class="altera">
                <a href="index.php" id="loga">Ir para tela de login.</a>
                <a href="cadastro.php" id="loga">Ir para tela de cadastro.</a>
            </div>
            <p class="senha-invalida">⚠ Senhas não coincidem</p>
            <input class="auxiliar" required>
            <input type="submit" name="submit" value="Alterar" id="botao">
    </main>
    <footer>
        <div class="footer">
            <img id="imgfooter" src="img/logofooter.png" alt="LogoFooter">
            <div class="texto">
                <p>&copy; Copyright - Bruno Alves e Pedro Henrique Elias - 2022</p>
                <p>Jacuí - MG</p>
            </div>
            <div class="links">
                <a href="https://github.com/DioneJA" target="_blank"><img src="img/github.png" alt=""></a>
                <a href="https://www.instagram.com/phenriquece/?hl=pt-br" target="_blank"><img src="img/instagram.png" alt=""></a>
                <a href="https://www.linkedin.com/in/pedro-henrique-9b7955208/" target="_blank"><img src="img/linkedin.png" alt=""></a>
            </div>
        </div>
    </footer>
</body>
<script src="js/mostra-senha-cadatro.js"></script>
<script src="js/enter-botao.js"></script>
<script src="js/verifica-altera-senha.js"></script>

</html>