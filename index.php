<?php
    
    if(is_int(5)){ /* true */
        echo "é um inteiro <br>";
    };

    if(is_int("Não é um inteiro")){ /* false */
        echo "é um inteiro <br>";
    };

    $a = 10;

    if(is_int($a)){ /* true, porque o conteúdo da variável é um número inteiro */
        echo "É um inteiro ";
    };
?>