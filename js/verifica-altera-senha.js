var botao = document.querySelector("#botao");
var senhaInput = document.querySelector("#senha");
var senhaLabel = document.querySelector(".senha-label");
var senhaConfirmadaInput = document.querySelector("#senha-confirmada");
var senhaConfirmadaLabel = document.querySelector(".senhaConfirmada-label");
var senha_invalida = document.querySelector(".senha-invalida");
var auxiliar = document.querySelector(".auxiliar");
auxiliar.style.display="none";

botao.addEventListener("click", function () {
    if (senhaInput.value == "") {
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
    }
    if (senhaConfirmadaInput.value == "") {
        senhaConfirmadaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaConfirmadaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        senhaConfirmadaLabel.textContent = "* ⚠ Senha requerido";

        senhaConfirmadaInput.addEventListener("focus", function () {
            senhaConfirmadaLabel.style.color = "rgb(6, 104, 6)";
            senhaConfirmadaInput.style.borderColor = "rgb(6, 104, 6)";
        });
        senhaConfirmadaInput.addEventListener("focusout", function () {
            senhaConfirmadaLabel.style.color = "rgba(190, 25, 25, 0.87)";
            senhaConfirmadaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
            if (senhaConfirmadaInput.value != "") {
                senhaConfirmadaLabel.style.color = "rgb(6, 104, 6)";
                senhaConfirmadaInput.style.borderColor = "rgb(6, 104, 6)";
            }
        });
    }
    if (senhaConfirmadaInput.value != senhaInput.value) {
        senha_invalida.style.display = "unset";
        senha_invalida.classList.add("senha-invalida-pos");
        senhaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        senhaConfirmadaLabel.style.color = "rgba(190, 25, 25, 0.87)";
        senhaConfirmadaInput.style.borderColor = "rgba(190, 25, 25, 0.87)";
        auxiliar.value = null;
    } else if (senhaConfirmadaInput.value == senhaInput.value && senhaConfirmadaInput.value != "" && senhaInput.value != "") {
        senha_invalida.style.display = "none";
        senhaConfirmadaLabel.style.color = "rgb(6, 104, 6)";
        senhaConfirmadaInput.style.borderColor = "rgb(6, 104, 6)";
        senhaLabel.style.color = "rgb(6, 104, 6)";
        senhaInput.style.borderColor = "rgb(6, 104, 6)";
        auxiliar.value = "aprovado";
    }
    return;
});