<?php
/* ESCOPO (local) */

    $x= 10; /* variavel global */
    
    function teste (){
        $x = 5; /* variável com o valor local (vale apenas dentro da função) */
        echo "local $x ";
    }
    teste(); /* exibe o valor da variavel local */
    echo "variável global é: $x <br>";/* exibe o valor da variável global */
    echo "<br>";

    
    function testando(){
        $x=2;
        echo "Testando local $x ";

    }
    
    teste();
    echo "<br>";
    testando();

?>