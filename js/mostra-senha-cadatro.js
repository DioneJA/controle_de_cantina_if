var senha = document.querySelector("#senha");
var senha_confirmada = document.querySelector("#senha-confirmada");
var exsenha1 = document.querySelector("#exibe-senha1");
var exsenha2 = document.querySelector("#exibe-senha2");

exsenha1.addEventListener("mousemove", function () {
    senha.type = "text";
    exsenha1.style.backgroundImage = "url('img/olho.png')";
});

exsenha1.addEventListener("mouseout", function () {
    senha.type = "password";
    exsenha1.style.backgroundImage = "url('img/olho-vermelho.png')";
});
exsenha2.addEventListener("mousemove", function () {
    senha_confirmada.type = "text";
    exsenha2.style.backgroundImage = "url('img/olho.png')";
});

exsenha2.addEventListener("mouseout", function () {
    senha_confirmada.type = "password";
    exsenha2.style.backgroundImage = "url('img/olho-vermelho.png')";
});