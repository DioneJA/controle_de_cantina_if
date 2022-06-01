var botao = document.querySelector("#botao");
document.addEventListener("keypress",function(e){
    if(e.which == 13){
        botao.click();
    }
})