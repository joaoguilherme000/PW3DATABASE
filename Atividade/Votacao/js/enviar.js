const botoesDeEnviar = document.getElementsByClassName("button");
var votoInput = document.getElementById("voto");

function enviando(event) {
  var idDoElementoClicado = event.target.id;
  votoInput.value = idDoElementoClicado;
  votoInput = document.getElementById("voto").value = idDoElementoClicado;

}

for (var i = 0; i < botoesDeEnviar.length; i++) {
  botoesDeEnviar[i].addEventListener("click", enviando);
}