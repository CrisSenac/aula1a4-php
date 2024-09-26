<?php

    $data = "24 de setembro de 2024";
    $salario = 700.00;
    $cargo = "Estagiária";
    $idade = 18;
    $resultado = true;

    if($resultado){
        print("Sua idade é: $idade");
        print("<br>Seu salário $salario");
        print("<br>Seu cargo é: $cargo");
        print("<br>O resultado é verdadeiro<br>");
    }

    echo "Arquivo criado em $data <br>";
    printf("<br>Salário mínimo: R$ %.2f <br>", $salario);
    $texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2);
    echo $texto;