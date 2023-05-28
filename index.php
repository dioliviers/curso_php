<?php
    /* Exercicio 21
     Faça as seguintes verificações
     - 5 é maior que 2?
     - Matheus é diferente de Pedro
     - 12 é menor ou igual a 11 ?
     - Você deve inserir valores em variáveis
     */

    $idade = 5;
    $nome = 'Matheus';
    $resultado =[];
    $resultado2 = [];

    $resultado = $idade > 4 ? "$idade é maior que 2 " : " $idade inserido não é maior ";
    echo $resultado . "<br>";

    $resultado2 = $nome != 'Pedro' ? " $nome é diferente " : " São iguais ";
    echo $resultado2 . "<br>";

    echo 12 >= 10 ? "  é menor " : " é maior <br>";


?>
