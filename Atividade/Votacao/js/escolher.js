function mostrarTime (event) {
    var idDoElementoClicado = event.target.id;
    document.getElementById("demo").innerHTML = "Você escolheu: " + idDoElementoClicado;
}

var Corinthians = document.getElementById("Corinthians");
var Palmeira = document.getElementById("Palmeira");
var Santos = document.getElementById("Santos");
var SPaulo = document.getElementById("Sao-Paulo");

Corinthians.addEventListener("click", mostrarTime);
Palmeira.addEventListener("click", mostrarTime);
Santos.addEventListener("click", mostrarTime);
SPaulo.addEventListener("click", mostrarTime);
