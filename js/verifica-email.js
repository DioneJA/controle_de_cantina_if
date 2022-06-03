var botao = document.querySelector("#botao");
var emailInput = document.querySelector("#email");
var emailLabel = document.querySelector(".email-label");
var raInput = document.querySelector("#ra");
var raLabel = document.querySelector(".ra-label");

botao.addEventListener("click", function () {
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
    return;
});