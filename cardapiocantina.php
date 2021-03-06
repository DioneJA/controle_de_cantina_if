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
    <title>Cantina</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/styleCardapio.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
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
        <div id="lanchonete">
            <h2>Lanchonete</h2><br>
            <hr>
            <h4>Horário:</h4><br>
            <p>8h às 22h</p><br>
            <p>A Lanchonete do Campus Passos conta com produtos variados, como: salgados assados, pão de queijo
                recheado, porção de mini pão de queijo, sucos naturais, sucos de caixinha, café expresso, capuccino,
                sorvetes e outros. O espaço será administrado pelo prestador de serviços do Restaurante, a empresa "Bar
                e Restaurante do Vanderli".</p><br>
            <p>"Tickets" para almoço, café e lanche serão vendidos somente na lanchonete do Campus. Para ter acesso ao
                refeitório é preciso adquirir seu "ticket" antes. Alunos que não recebem auxílio alimentação, ou seja,
                aqueles que não são dos cursos integrados, devem adquirir antecipadamente. Qualquer dúvida entre em
                contato pelo e-mail do Restaurante do Campus Passos.</p><br>
        </div>
        <table>
            <tr>
                <h1>CARDÁPIO</h1><br>
            </tr>
            <tr>
                <td>Serviço</td>
                <td>Salgados </td>
                <td></td>
                <td>Bebidas</td>
            </tr>
            <tr>
                <td>Segunda-feira</td>
                <td>Pão de queijo recheado</td>
                <td>Esfiha de carne</td>
                <td>Suco de uva</td>
            </tr>
            <tr>
                <td>Terça-feira</td>
                <td>Pão de queijo recheado</td>
                <td>Assado de hambúrguer</td>
                <td>Suco de pêssego</td>
            </tr>
            <tr>
                <td>Quarta-feira</td>
                <td>Pão de queijo recheado</td>
                <td>Assado de calabresa</td>
                <td>Suco de laranja</td>
            </tr>
            <tr>
                <td>Quinta-feira</td>
                <td>Pão de queijo recheado</td>
                <td>Assado de salsicha</td>
                <td>Suco de morango</td>
            </tr>
            <tr>
                <td>Sexta-feira</td>
                <td>Pão de queijo recheado</td>
                <td>Assado de frango</td>
                <td>Suco de abacaxi</td>
            </tr>
        </table>
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
                <a href="https://www.instagram.com/phenriquece/?hl=pt-br" target="_blank"><img src="img/instagram.png"
                        alt=""></a>
                <a href="https://www.linkedin.com/in/pedro-henrique-9b7955208/" target="_blank"><img
                        src="img/linkedin.png" alt=""></a>
            </div>
        </div>
    </footer>
</body>

</html>