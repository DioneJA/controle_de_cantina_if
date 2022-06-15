var exsenha = document.querySelector("#exibe-senha");
var senha = document.querySelector("#senha");

exsenha.addEventListener("click",function(){
    if(senha.type =="password"){
        senha.type = "text";
        exsenha.style.backgroundImage = "url('img/olho.png')";
    }else{
        senha.type = "password";
        exsenha.style.backgroundImage = "url('img/olho-vermelho.png')";
    }
});

