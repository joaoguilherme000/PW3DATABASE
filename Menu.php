<?php

  echo "DIA DA SEMANA</br></br>";

  echo "1-SEGUNDA</br></br>2-TERÇA</br></br>3-QUARTA</br></br>4-SAIR</br>";

  $diaDaSemana = 1;

  switch ($diaDaSemana) {
    case 1:
      echo "</br>Segunda-feira";
      break;
    case 2:
      echo "</br>Terça-feira";
      break;
    case 3:
      echo "</br>Quarta-feira";
      break;
    case 4:
      echo "</br>SAIR";
      break;
    default:
      echo "Dia desconhecido";
  }



?>