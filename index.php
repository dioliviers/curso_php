<?php
/* ESCOPO (global) */
    $teste = "asd";
    echo "$teste global 1 <br>";

        if(5>2){
            $teste = "dsa";
            echo "$teste teste do if";    
        }
    echo "<br>";
    echo "$teste global 2 <br>"; /* aqui a variavel fica alterada por conta da alteração feita no 
    bloco do if */
    
    function testandoGlobal(){
        global $teste; /* inserindo a variável no escopo global a variavel fica valendo o mesmo valor mesmo fora da função
        a não ser que a mesma seja alterada */

        $teste = 3;

        echo "$teste global função <br>";
    }
    testandoGlobal(); /* chamando a função com a variável tipada com o escopo global */
    echo "<br>";
    echo $teste; /* chamando o valor da variavel tipada com escopo global */
    echo "<br>";
    $teste = "alterei o valor da variavel no escopo global"; /* alterei o valor da variavel teste */
    echo $teste; /* chamei a variável teste com o valor alterado */


    

    

?>