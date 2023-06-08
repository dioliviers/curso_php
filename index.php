<?php
    /* Crie uma variavel que recebe uma velocidade de um carro;
    Depois crie uma estrutura IF que verifica essa velocidade
    se a velocidade for menor que 40 , imprima que o motorista está na velocidade correta
    Se igual a 40 imprima uma mensagem para o motorista tomar cuidado.;
    se for maior de 40, imprima uma mensagem de multa; */

    $velocidade_exigida = 40;
    $velocidade_carro = 39;
    if( $velocidade_carro < $velocidade_exigida ){
        echo "Você está na velocidade correta";
        
    }elseif($velocidade_carro == $velocidade_exigida){
        echo "Tome cuidado !";
    }else{
        echo "Você tomou uma multa !";
    }

?>

