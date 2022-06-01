var botao = document.querySelector("#botao");
var emailInput = document.querySelector("#email");
var emailLabel = document.querySelector(".email-label");
var senhaInput = document.querySelector("#senha");
var senhaLabel = document.querySelector(".senha-label");

botao.addEventListener("click", function () {
    if (emailInput.value == "") {
        emailLabel.style.color = "rgba(190, 25, 25, 0.87)";
        emailLabel.textContent = "* ⚠ Email requerido";
        if (senhaInput.value == "") {
            senhaLabel.style.color = "rgba(190, 25, 25, 0.87)";
            senhaLabel.textContent = "* ⚠ Senha requerida";
        }
        return;
    }
    if (senhaInput.value == "") {
        senhaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaLabel.textContent = "* ⚠ Senha requerida";
        return;
    }
});

