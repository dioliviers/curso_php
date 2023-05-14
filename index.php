<?php
    /*  Operadores de expressão */
    $a =  (int) "12";
    echo $a;
    echo "<br>";

    echo $a + 12 ;

    if ( $a === 12 ) {
        echo " <br> A é idêntico a 12 ";
    } 

    $b = (float) "3.53515";

    if ( $b === 3.53515 ) {
        echo " <br> B é idêntico a 3.35 ";
    } 

    $c = (string) 34;
    echo "<br>";
    
    if ( $c === "34" ) {
        echo "O operador C é idêntico a 34";
    }
?>