<?php
if (isset($_POST["submit"])) {
    include_once("conecta.php");
    $nome = ($_POST["nome"]);
    $email = ($_POST["email"]);
    $ra = ($_POST["ra"]);
    $data = ($_POST["data"]);
    $curso = ($_POST["curso"]);
    $periodo = ($_POST["periodo"]);
    $senha = ($_POST["senha"]);
    $resultado = mysqli_query($conexao = abreConexao(), "INSERT INTO aluno(nome, email, ra, nascimento, curso, periodo, senha) VALUES('$nome', '$email', '$ra', '$data', '$curso', '$periodo', '$senha')");
?>
    <meta http-equiv="refresh" content="1; URL='index.php?mensagem=ui'" /><?php
                                                                        }
                                                                            ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFSULDEMINAS - Cadastro</title>
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
            <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
        </div>
    </header>
    <main>
        <form action="cadastro.php" method="post" class="container">
            <div class="imagem">
                <img src="img/imglogin.png" alt="Logo ifsuldeminas">
            </div>
            <h1>Cadastro</h1>
            <div class="linha"></div>
            <div class="login">
                <input type="text" name="nome" id="nome" placeholder=" " required>
                <label class="nome-label"><i class="fa-solid fa-user"></i> Nome</label>
            </div>
            <div class="login">

                <input type="email" name="email" id="email" placeholder=" " required>
                <label class="email-label"><i class="fa-solid fa-envelope"></i> E-mail</label>
            </div>
            <div class="login">

                <input type="text" name="ra" id="ra" placeholder=" " required>
                <label class="ra-label"><i class="fa-solid fa-address-card"></i> Registro Acadêmico</label>
            </div>
            <div class="data">
                <label class="data-label">Data de nascimento: <br><i class="fa-solid fa-calendar"></i>
                    <input type="date" name="data" id="data" required></i> </label>
            </div>
            <div class="curso">
                <label class="curso-label">Curso: <br> <i class="fa-solid fa-book"></i>
                    <select name="curso" id="curso">
                        <option value="null" selected>Selecione</option>
                        <option value="bcc">Ciência da Computação</option>
                        <option value="mat">Matemática</option>
                        <option value="adm">Administração</option>
                        <option value="mod">Moda</option>
                    </select> </label>
            </div>

            <div class="periodo">
                <label class="periodo-label">Período:<br><i class="fa-solid fa-graduation-cap"></i>
                    <select name="periodo" id="periodo">
                        <option value="null" selected>Selecione</option>
                        <option value="um">1° Período</option>
                        <option value="dois">2° Período</option>
                        <option value="tres">3° Período</option>
                        <option value="quatro">4° Período</option>
                        <option value="cinco">5° Período</option>
                        <option value="seis">6° Período</option>
                        <option value="sete">7° Período</option>
                        <option value="oito">8° Período</option>
                        <option value="nove">9° Período</option>
                        <option value="dez">10° Período</option>
                    </select> </label>
            </div>
            <div class="login">
                <input type="password" name="senha" id="senha" placeholder=" " required>
                <label class="senha-label"><i class="fa-solid fa-lock"></i> Senha</label>
                <button type="button" id="exibe-senha1" style="background-image: url('img/olho-vermelho.png');"></button>
            </div>
            <div class="login">
                <input type="password" name="senha-confirmada" id="senha-confirmada" placeholder=" " required>
                <label class="senhaConfirmada-label"><i class="fa-solid fa-lock"></i> Confirme a sua senha</label>
                <button type="button" id="exibe-senha2" style="background-image: url('img/olho-vermelho.png');"></button>
            </div>
            <p class="senha-invalida">⚠ Senhas não coincidem</p>
            <input class="auxiliar" required>
            <div class="altera">
                <a href="index.php" id="loga">Já possui uma conta?</a>
            </div>
            <input type="submit" name="submit" value="Cadastrar" id="botao">
        </form>
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
<script src="js/style-selection.js"></script>
<script src="js/enter-botao.js"></script>
<script src="js/verifica-cadastro.js"></script>

</html>