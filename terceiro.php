<?php 

    $valor = 10;
    $somar = 0;

// trocando o sinal de <> por c o calculo fica infinito
    for($i=0;$i<=5;$i++){

    $somar = $somar + $valor;
    print("O valor é: $somar");
    print("<br> O valor é: $somar");
}