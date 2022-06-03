var botao = document.querySelector("#botao");
var emailInput = document.querySelector("#email");
var emailLabel = document.querySelector(".email-label");
var senhaInput = document.querySelector("#senha");
var senhaLabel = document.querySelector(".senha-label");

botao.addEventListener("click", function () {
    emailLabel.style.color = "rgba(190, 25, 25, 0.87)";
    emailInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
    emailLabel.textContent = "* ⚠ Email requerido";

    emailInput.addEventListener("focus", function () {
        emailLabel.style.color = "rgb(6, 104, 6)";
        emailInput.style.borderColor = "rgb(6, 104, 6)";
    });
    emailInput.addEventListener("focusout", function () {
        emailLabel.style.color = "rgba(190, 25, 25, 0.87)";
        emailInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        if (emailInput.value != "") {
            emailLabel.style.color = "rgb(6, 104, 6)";
            emailInput.style.borderColor = "rgb(6, 104, 6)";
        }
    }
    );
    senhaLabel.style.color = "rgba(190, 25, 25, 0.87)";
    senhaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
    senhaLabel.textContent = "* ⚠ Senha requerido";

    senhaInput.addEventListener("focus", function () {
        senhaLabel.style.color = "rgb(6, 104, 6)";
        senhaInput.style.borderColor = "rgb(6, 104, 6)";
    });
    senhaInput.addEventListener("focusout", function () {
        senhaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        if (senhaInput.value != "") {
            senhaLabel.style.color = "rgb(6, 104, 6)";
            senhaInput.style.borderColor = "rgb(6, 104, 6)";
        }
    });
    return;
});

