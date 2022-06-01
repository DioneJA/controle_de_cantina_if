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
        nomeLabel.textContent = "* ⚠ Nome requerido";
    }
    if (emailInput.value == "") {
        emailLabel.style.color = "rgba(190, 25, 25, 0.87)";
        emailLabel.textContent = "* ⚠ Email requerido";
    }
    if(raInput.value==""){
        raLabel.style.color = "rgba(190, 25, 25, 0.87)";
        raLabel.textContent = "* ⚠ R.A requerido";
    }
    if(dataInput.value==""){
        dataLabel.style.color = "rgba(190, 25, 25, 0.87)";
    }
    if(cursoInput.value=="null"){
        cursoLabel.style.color = "rgba(190, 25, 25, 0.87)";
    }
    if(periodoInput.value=="null"){
        periodoLabel.style.color = "rgba(190, 25, 25, 0.87)";
    }
     if (senhaInput.value == "") {
        senhaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaLabel.textContent = "* ⚠ Senha requerida";
    }
    if (senhaConfirmadaInput.value == "") {
        senhaConfirmadaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaConfirmadaLabel.textContent = "* ⚠ Senha requerida";
    }
});

