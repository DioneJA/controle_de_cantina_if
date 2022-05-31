var data_label = document.querySelector(".data-label");
var data_input = document.querySelector("#data");
var curso_label = document.querySelector(".curso-label");
var curso_input = document.querySelector("#curso");
var periodo_label = document.querySelector(".periodo-label");
var periodo_input = document.querySelector("#periodo");

data_input.addEventListener("focusout",function(){
    if(data_input.value!=""){
        data_label.style.color = "rgb(6, 104, 6)";
        data_input.style.color = "black";
    }else{
        data_label.style.color = "rgb(116, 110, 110)";
    }
});

curso_input.addEventListener("click",function(){
    if(curso_input.value!="null"){
        curso_label.style.color = "rgb(6, 104, 6)";
        curso_input.style.color = "black";
    }else{
        curso_label.style.color = "rgb(116, 110, 110)"
    }
});
periodo_input.addEventListener("click",function(){
    if(periodo_input.value!="null"){
        periodo_label.style.color = "rgb(6, 104, 6)";
        periodo_input.style.color = "black";
    }else{
        periodo_label.style.color = "rgb(116, 110, 110)"
    }
});