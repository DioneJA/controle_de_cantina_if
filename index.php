<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFSULDEMINAS - Login</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="shortcut icon" href="img/faveicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/header-signin-signup.css">

</head>

<body>
    <header>
        <div id="logo">
            <a href="index.php"><img class="imgcabecalho" src="img/logo.png" alt="Logo"></a>
        </div>
    </header>
    <main>

        <form class="container" action="autentica.php" method="POST">
            <div class="imagem">
                <img src="img/imglogin.png" alt="Logo ifsuldeminas">
            </div>
            <h1>Entrar</h1>
            <div class="linha"></div>
            <div class="login">
                <input type="email" name="email" id="email" placeholder=" ">
                <label class="email-label"><i class="fa-solid fa-envelope"></i> E-mail</label>
            </div>
            <div class="login">
                <input type="password" name="senha" id="senha" placeholder=" ">
                <label class="senha-label"><i class="fa-solid fa-lock"></i> Senha</label>
                <button type="button" id="exibe-senha" style="background-image: url('img/olho-vermelho.png'); "></button>
            </div>
            <div class="altera">
                <a href="verifica-email.php" id="trocarSenha">Esqueceu sua senha?</a>
                <a href="cadastro.php" id="cadastro">Primeiro acesso?</a>
            </div>
            <p class="incorreto">

                <?php
                if ($_GET["mensagem"] == 'nl')
                    echo "??? Usu??rio n??o logado";
                else if ($_GET["mensagem"] == 'ui')
                    echo "??? Usu??rio ou senha incorretos";
                ?>

            </p>
            <input type="submit" id="botao" value="Login" name="submit">

        </form>
    </main>
    <footer>
        <div class="footer">
            <img id="imgfooter" src="img/logofooter.png" alt="LogoFooter">
            <div class="texto">
                <p>&copy; Copyright - Bruno Alves e Pedro Henrique Elias - 2022</p>
                <p>Jacu?? - MG</p>
            </div>
            <div class="links">
                <a href="https://github.com/DioneJA" target="_blank"><img src="img/github.png" alt=""></a>
                <a href="https://www.instagram.com/phenriquece/?hl=pt-br" target="_blank"><img src="img/instagram.png" alt=""></a>
                <a href="https://www.linkedin.com/in/pedro-henrique-9b7955208/" target="_blank"><img src="img/linkedin.png" alt=""></a>
            </div>
        </div>
    </footer>
</body>
<script src="js/mostra-senha.js"></script>
<script src="js/enter-botao.js"></script>
<script src="js/verifica-login.js"></script>

</html>