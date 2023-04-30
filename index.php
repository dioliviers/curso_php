<?php
    class Pessoa { /* molde */
        
        function falar(){ /* função falar */
            echo "Olá pessoal";
        }
        
    }
    $diogo= new Pessoa(); /* criamos uma nova pessoa através do molde PESSOA da classe Pessoa */
    $diogo ->nome = "Diogo"; /* Inseridmos um atributo nome com um valor na variável diogo da classe pessoa */

    echo $diogo ->nome; /* exibimos o valor da variável nome */
     
    $pedro = new Pessoa(); /* criamos uma nova pessoa */
    $pedro -> nome = "Pedro Henrique ";
    echo "<br>";
    echo $pedro ->nome;
    echo "<br>";
    $diogo ->falar();/* Para chamar as ações temos que chamar o objeto e atribuimos a ação da função */
    
?>
