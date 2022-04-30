<?php

    require_once("Ponto.php");

    $p1 = new Ponto(2, 4);
    echo "Quantidade de objetos criados: "  .Ponto::getContador();
    $p2 = new Ponto(4,6);
    echo "<br/>";
    echo "Distancia entre os pontos: " .$p1->calcularDistancia($p2);
    echo "<br/>";
    echo "Distancia entre os pontos: " .$p1->calcularDistancia1(4,6);