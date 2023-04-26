<?php
    $a = "olá mundo !";
        if(is_string($a)){ /* verifica se o dado recebido é uma string , se for ele retorna o valor da variável, caso contrario entra no else */
            echo $a;
        }else{
            echo "não é string";
        }
?>