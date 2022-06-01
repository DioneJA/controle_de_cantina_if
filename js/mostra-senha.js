var exsenha = document.querySelector("#exibe-senha");
var senha = document.querySelector("#senha");

exsenha.addEventListener("mouseover",function(){
    senha.type = "text";
    exsenha.style.backgroundImage = "url('img/olho.png')";
});
exsenha.addEventListener("mouseout",function(){
    senha.type = "password";
    exsenha.style.backgroundImage = "url('img/olho-vermelho.png')";
});
