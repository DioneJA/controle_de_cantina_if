var exsenha = document.querySelector(".exsenha");
var senha = document.querySelector("#senha");

exsenha.addEventListener("click",function(){
    if(exsenha.checked==true){
        senha.type = "text";
    }else{
        senha.type = "password";
    }
});
