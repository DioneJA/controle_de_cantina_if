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
    <title>IFSULDEMINAS - Planos</title>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/produtos.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style/homeStyle.css">
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
    <main class="secundario">
        <h1>Planos disponíveis</h1>
        <ul class="produtos">
            <li class="item">
                <h2>Diário</h2>
                <img src="img/10.png" alt="10">
            </li>
            <li class="item">
                <h2>Mensal</h2>
                <img src="img/20.png" alt="20">
            </li>
            <li class="item">
                <h2>Trimestral</h2>
                <img src="img/50.png" alt="50">
            </li>
            <li class="item">
                <h2>Semestral</h2>
                <img src="img/cem.png" alt="100">
            </li>
            <li class="item">
                <h2>Anual</h2>
                <img src="img/quatrocentos.png" alt="400">
            </li>
            <li class="item">
                <h2>Cupom para ambas lanchonetes</h2>
                <img src="img/500.png" alt="500">
            </li>
        </li>
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