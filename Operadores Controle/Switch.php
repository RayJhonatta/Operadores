<?php

$diaSemana = 9;
$dia = '';

switch($diaSemana) {
    case 1:
        $dia = "Segunda-Feira";
        break;
    case 2:
        $dia = "Terça-Feira";
        break;
    case 3:
        $dia = "Quarta-Feira";
        break;
    case 4:
        $dia = "Quinta-Feira";
        break;
    case 5:
        $dia = "Sexta-Feira";
        break;
    case 6:
        $dia = "Sábado";
        break;
    case 7: 
        $dia = "Domingo";
        break;
    default:
      $dia = "Esse dia não correspode a nenhum dia da semana";
   }

echo $dia;