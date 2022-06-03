var botao = document.querySelector("#botao");
var nomeInput = document.querySelector("#nome");
var nomeLabel = document.querySelector(".nome-label");
var emailInput = document.querySelector("#email");
var emailLabel = document.querySelector(".email-label");
var senhaInput = document.querySelector("#senha");
var senhaLabel = document.querySelector(".senha-label");
var raInput = document.querySelector("#ra");
var raLabel = document.querySelector(".ra-label");
var dataInput = document.querySelector("#data");
var dataLabel = document.querySelector(".data-label");
var cursoInput = document.querySelector("#curso");
var cursoLabel = document.querySelector(".curso-label");
var periodoInput = document.querySelector("#periodo");
var periodoLabel = document.querySelector(".periodo-label");
var senhaConfirmadaInput = document.querySelector("#senha-confirmada");
var senhaConfirmadaLabel = document.querySelector(".senhaConfirmada-label");

botao.addEventListener("click", function () {
    if(nomeInput.value==""){
        nomeLabel.style.color = "rgba(190, 25, 25, 0.87)";
        nomeInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        nomeLabel.textContent = "* ⚠ Nome requerido";

        nomeInput.addEventListener("focus",function(){
            nomeLabel.style.color = "rgb(6, 104, 6)";
            nomeInput.style.borderColor = "rgb(6, 104, 6)";
        });
        nomeInput.addEventListener("focusout",function(){
            nomeLabel.style.color = "rgba(190, 25, 25, 0.87)";
            nomeInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
            if(nomeInput.value!=""){
                nomeLabel.style.color = "rgb(6, 104, 6)";
                nomeInput.style.borderColor = "rgb(6, 104, 6)";
            }
        });
    }
    if (emailInput.value == "") {
        emailLabel.style.color = "rgba(190, 25, 25, 0.87)";
        emailInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        emailLabel.textContent = "* ⚠ Email requerido";

        emailInput.addEventListener("focus",function(){
            emailLabel.style.color = "rgb(6, 104, 6)";
            emailInput.style.borderColor = "rgb(6, 104, 6)";
        });
        emailInput.addEventListener("focusout",function(){
            emailLabel.style.color = "rgba(190, 25, 25, 0.87)";
            emailInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
            if(emailInput.value!=""){
                emailLabel.style.color = "rgb(6, 104, 6)";
                emailInput.style.borderColor = "rgb(6, 104, 6)";
            }
        });
    }
    if(raInput.value==""){
        raLabel.style.color = "rgba(190, 25, 25, 0.87)";
        raInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        raLabel.textContent = "* ⚠ R.A requerido";

        raInput.addEventListener("focus",function(){
            raLabel.style.color = "rgb(6, 104, 6)";
            raInput.style.borderColor = "rgb(6, 104, 6)";
        });
        raInput.addEventListener("focusout",function(){
            raLabel.style.color = "rgba(190, 25, 25, 0.87)";
            raInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
            if(raInput.value!=""){
                raLabel.style.color = "rgb(6, 104, 6)";
                raInput.style.borderColor = "rgb(6, 104, 6)";
            }
        });
    }
    if(dataInput.value==""){
        dataLabel.style.color = "rgba(190, 25, 25, 0.87)";
        data_input.addEventListener("focusout",function(){
            if(data_input.value==""){
                data_label.style.color = "rgba(190, 25, 25, 0.87)";
                data_input.style.color = "black";
            }else{
                data_label.style.color = "rgb(6, 104, 6)";
            }
        });
    }
    if(cursoInput.value=="null"){
        cursoLabel.style.color = "rgba(190, 25, 25, 0.87)";
        cursoInput.addEventListener("click",function(){
            if(cursoInput.value!="null"){
                cursoLabel.style.color = "rgb(6, 104, 6)";
                cursoInput.style.color = "black";
            }else{
                cursoLabel.style.color = "rgba(190, 25, 25, 0.87)"
            }
        });
    }
    if(periodoInput.value=="null"){
        periodoLabel.style.color = "rgba(190, 25, 25, 0.87)";
        periodoInput.addEventListener("click",function(){
            if(periodoInput.value!="null"){
                periodoLabel.style.color = "rgb(6, 104, 6)";
                periodoInput.style.color = "black";
            }else{
                periodoLabel.style.color = "rgba(190, 25, 25, 0.87)"
            }
        });
    }
     if (senhaInput.value == "") {
        senhaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        senhaLabel.textContent = "* ⚠ Senha requerido";

        senhaInput.addEventListener("focus",function(){
            senhaLabel.style.color = "rgb(6, 104, 6)";
            senhaInput.style.borderColor = "rgb(6, 104, 6)";
        });
        senhaInput.addEventListener("focusout",function(){
            senhaLabel.style.color = "rgba(190, 25, 25, 0.87)";
            senhaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
            if(senhaInput.value!=""){
                senhaLabel.style.color = "rgb(6, 104, 6)";
                senhaInput.style.borderColor = "rgb(6, 104, 6)";
            }
        });
    }
    if (senhaConfirmadaInput.value == "") {
        senhaConfirmadaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaConfirmadaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        senhaConfirmadaLabel.textContent = "* ⚠ Senha requerido";

        senhaConfirmadaInput.addEventListener("focus",function(){
            senhaConfirmadaLabel.style.color = "rgb(6, 104, 6)";
            senhaConfirmadaInput.style.borderColor = "rgb(6, 104, 6)";
        });
        senhaConfirmadaInput.addEventListener("focusout",function(){
            senhaConfirmadaLabel.style.color = "rgba(190, 25, 25, 0.87)";
            senhaConfirmadaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
            if(senhaConfirmadaInput.value!=""){
                senhaConfirmadaLabel.style.color = "rgb(6, 104, 6)";
                senhaConfirmadaInput.style.borderColor = "rgb(6, 104, 6)";
            }
        });
    }
    return;
});

