const BotaoDeEnviar = document.getElementById("Enviar");

function enviando() {
  // Use a função confirm() para mostrar uma mensagem de confirmação
  const confirmacao = confirm("Tem certeza de que deseja enviar o formulário?");

  // Se o usuário clicar em "OK" na caixa de diálogo de confirmação, a variável confirmacao será verdadeira
  if (confirmacao) {
    alert("Mostrando Resultado!");
  } else {
    alert("Cancelado");
  }
}

BotaoDeEnviar.addEventListener("click", enviando);