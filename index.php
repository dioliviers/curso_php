<?php
    /* Exercicio 25
    Crie variáveis com números e outras com string 
    Faça um if checando se é um número;
    caso for, atribua a multiplicação deste número por 2 em outra variável;
    Crie outro if, que checa se o novo número é maior que 100;
    Se sim, imprima uma mensagem*/

    $num1 = 101;
    $num2 = 40;
    $teste = 'teste';
    if ( is_int($num1) || is_float($num1) ){
        $mult = $num1 * 2;
        if( $mult > 100 ) {
            echo 'o número é maior que 100 <br> ';
        }else { 
            echo ' O número é menor que 100 <br> ';
        }
    };
    if ( is_int($num2) || is_float($num2) ){
        $mult = $num2 * 2;
        if( $mult > 100 ) {
            echo 'o número é maior que 100 <br> ';
        }else { 
            echo ' O número é menor que 100 <br> ';
        }
    };
?>
