<?php
    /* exercicio 15 
    fazendo validação através de um numeral
    se o valor inserido for diferente de um número retorna a notificação
    se o valor for maior cai no elseif
    se o valor for menor cai no outro elseif */
    
    $idade_minima = 18;
    $idade = 17;

    if (!is_numeric($idade)){
        echo "Digite um número para continuar";
    }
    elseif($idade >= $idade_minima){
        echo "Você tem $idade anos, pode entrar";
    }elseif($idade < $idade_minima){
        echo "Você tem $idade, não pode entrar";
        
    }
?>