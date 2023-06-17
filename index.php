<?php
    
    function compararNumeros($num1,$num2){
        if($num1 > $num2){
                return "O número $num1 é maior que $num2";
            }elseif ($num2 > $num1) {
                return " O número $num2 é maior que $num1";
            }elseif ($num1 === $num2){
                return "Os números $num1 e $num2 são iguais";
        }
    }
    echo compararNumeros(5, 8);  // Output: O segundo número é maior.
    echo compararNumeros(10, 5);  // Output: O primeiro número é maior.
    echo compararNumeros(7, 7);  // Output: Os números são iguais.
?>
