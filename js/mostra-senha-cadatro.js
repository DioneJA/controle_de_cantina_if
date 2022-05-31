var senha = document.querySelector("#senha");
var senha_confirmada = document.querySelector("#senha-confirmada");
var exsenha = document.querySelector(".exsenha");

exsenha.addEventListener("click",function(){
    if(exsenha.checked==true){
        senha.type = "text";
        senha_confirmada.type = "text";
    }else{
        senha.type = "password";
        senha_confirmada.type = "password";
    }
});