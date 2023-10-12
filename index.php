<?php
    /* exercicio  35 */

    /* calculo da raiz quadrada  */
    function calcNum($num){
        $res = "A raiz quadrada de $num é " . sqrt($num) . " OK ? </br>";
        return $res;
    }
    echo calcNum(10);
    ?> </br>
     <?php
    /* Calculo do valor ao quadrado */
    function calcQuadrado($num1){
        $res =  "O número digitado foi $num1 " . "A raiz quadrada de $num1 é : ". pow($num1,$num1);
        return $res;
    }
    echo calcQuadrado(2);
?>



    