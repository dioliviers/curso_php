<?php

    /* Exercicio 22
    - Crie variáveis que recebem idades;
    - Cheque se as idades são maiores ou iguais a 18,
    caso seja TRUE imprima uma mensagem que a pessoa é maior de idade.
     */
     $validador = '';
     $idade = $validador;
     $idade = 'oi';

     $idade2 = $validador;
     $idade2 = 20;
   
        function verificaIdade($validador){
            if(empty($validador)){
                echo "é necessário preencher um valor para validação <br>";
            }
            elseif( !is_numeric($validador)){
                echo "insira apenas números <br> ";
            }
            elseif($validador >= 18){
                echo "Pode entrar maior de idade <br> ";
            }elseif ($validador < 18 ) {
                echo " Menor de idade <br> ";
            }
        }
    verificaIdade($idade);
    verificaIdade($idade2);
?>
