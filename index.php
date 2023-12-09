<?php
/* Exercicio 45 
1-Crie um array com a função range de 10 a 45
2- imprima todos os números com uma soma de 6 
3- Se passar de 30 a soma, imprima também o que o número é muito alto */
    $arr= range(10,45);
        foreach( $arr as $numero ){
            $numero += 6;
            if ( $numero < 30 ){
                echo 'Os números menores que 30 é '.$numero. '</br>';
            }elseif( $numero > 30) {
                echo ('O número ' . $numero . ' é muito alto, maior que 30 ! </br> ');
            }
        }
?>



    