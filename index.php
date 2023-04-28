<?php
   $a = true;

    if(is_bool($a)){
        echo "é um booleano ! <br>";
    }
    if(is_bool(0)){ /* 0 é um número (false) não exibe nada */
        echo "é um booleano !";
    }
    if(is_bool(false)){ /* aqui ele vai exibir o valor de false  */
        echo "é um booleano false!";
    }
?>
