<?php

session_start();
if ($_SESSION['login'] == true) {
} else {
    header("Location:index.php?mensagem=nl");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/styleCardapio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div id="logo">
            <a href=""><img src="img/logo.png" alt="Logo"></a>
        </div>
        <nav id="links">
            <label for="id-show-menu" class="show-menu">
                <div class="nav-icon">
                    <i class="fa fa-navicon"></i>
                </div>
            </label>
            <input type="checkbox" id="id-show-menu" class="checkbox-menu" role="button">
            <div class="menu-block">
                <ul class="navUL">
                    <li><a href="home.php"><i class="fa-solid fa-house"> HOME</i></a></li>
                    <li><a href="cardapio.php"><i class="fa-solid fa-utensils"> CARDÁPIO RESTAURANTE</i></a></li>
                    <li><a href="cardapiocantina.php"><i class="fa-solid fa-burger"> CARDÁPIO LANCHONETE</i></a></li>
                    <li><a href="planos.php"> <i class="fa-solid fa-dollar-sign"> PLANOS</i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div id="inicio">
            <h2>Início</h2><br>
            <hr><br>
            <p>
                A equipe do restaurante do Campus Passos solicita a colaboração de todos para a retirada dos pratos e
                talheres após o uso.
            </p><br>
            <p>
                Pede-se também que todos os estudantes e servidores levem suas próprias canecas para as refeições. Há
                uma pia para higienização das canecas no local e todas as medidas de segurança estão sendo seguidas
                conforme<a href="https://portal.pas.ifsuldeminas.edu.br/images/Placa_restaurante.pdf"> Protocolo do
                    Comitê de Biossegurança.</a>
            </p><br>
            <p>
                Caso queira fazer sugestões, críticas e/ou elogios, encaminhar email para <a
                    href="mailto: restaurante.passos@ifsuldeminas.edu.br."
                    target="_blank">restaurante.passos@ifsuldeminas.edu.br.</a>
            </p><br><br>
        </div>
        <div id="cafe">
            <h2>Café da manhã</h2><br>
            <hr>
            <h4>Horários:</h4><br>
            <p>1° Horário: 8h40 às 9h10 </p><br>
            <p>2° Horário: 9h30 às 10h </p><br><br>
        </div>
        <div id="almoco">
            <h2>Almoço</h2><br>
            <hr>
            <h4>Horário:</h4><br>
            <p>11h30 às 13h30</p><br>
            <h1>CARDÁPIO</h1><br>
            <table>
                <tr>
                    <td>Serviço</td>
                    <td>Almoço</td>
                    <td></td>
                    <td>Acompanhamento</td>
                </tr>
                <tr>
                    <td>Segunda-feira</td>
                    <td>Arroz</td>
                    <td>Feijão</td>
                    <td>Fricassê de frango ou Fricassê de grão de bico</td>
                </tr>
                <tr>
                    <td>Terça-feira</td>
                    <td>Arroz</td>
                    <td>Feijão</td>
                    <td>Quibe assado ou Quibe de soja</td>
                </tr>
                <tr>
                    <td>Quarta-feira</td>
                    <td>Arroz</td>
                    <td>Feijão</td>
                    <td>Isca suína acebolada ou Bolinho de espinafre</td>
                </tr>
                <tr>
                    <td>Quinta-feira</td>
                    <td>Arroz</td>
                    <td>Feijão tropeiro</td>
                    <td>Frango ao molho ou Omelete</td>
                </tr>
                <tr>
                    <td>Sexta-feira</td>
                    <td>Arroz</td>
                    <td>Feijão</td>
                    <td>Parmegiana de lombo ou Parmegiana de beringela</td>
                </tr>
            </table>
        </div>
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
                <a href="https://www.instagram.com/phenriquece/?hl=pt-br" target="_blank"><img
                        src="img/instagram.png" alt=""></a>
                <a href="https://www.linkedin.com/in/pedro-henrique-9b7955208/" target="_blank"><img
                        src="img/linkedin.png" alt=""></a>
            </div>
        </div>
    </footer>
</body>

</html>