<?php
/* ESCOPO (STATIC) */

    function teste (){
        $a = 0; 
        $a++; 

        echo "$a <br>";
        
    }
    /* aqui ele manteem o valor a cada chamada */
    teste(); /* 1 */
    teste();/* 1 */
    teste();/* 1 */
    function testeStatic(){
        static $a = 0; /* com  o static ele mantém o valor*/
        $a++;  /* aqui ele incrementa o proximo numeral mantendo o valor anterior */

        echo "$a <br>";
    };
    testeStatic();/* 1 */
    testeStatic();/* 2 */
    testeStatic();/* 3 */
    testeStatic();

 

?>