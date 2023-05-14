<?php
    /*  Exercicio 19 
    converta os dados para INT com o operador CAST (Conversão) */

    $a = (int) "testando";
    $b = (int) 12.9;
    $c = (int) true;
    $d = (int) [1,2,3];

    echo "<br>";
    echo "$a . <br>"; /* aqui ele vai retornar 0 porque não da pra converter string para número */
    echo "$b . <br>"; /*  aqui ele retorna o número inteiro 12 */
    echo "$c . <br>";/*  aqui ele retorna 1 porque true é um boleano verdadeiro */
    echo "$d . <br>"; /*  aqui ele retorna 1 porque é um array de números */
    
?>