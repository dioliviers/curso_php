<?php
    echo NULL;
    $nome = NULL; /* inserido valor nulo */

    if(is_null($nome)){ /* se o valor da variável for nulo ele exibe o conteúdo do echo dentro do bloco*/
        echo "O valor é nulo !";
    };
    
    $nome = "Diogo"; /* aqui alteramos o valor nulo da variavel com um valor e exibimos abaixo com um echo */
        echo "<br>";
        echo $nome;
?>
