<?php
    $nome = "Diogo";
    switch($nome){
        case "Pedro": /* verifica se a variável é == a String "Pedro" */
            echo "Pedro não é igual ao nome mencionado";
            break; /* Se for igual a Pedro a variavel nome o break para a leitura aqui senão ele continua as validações */
        case "Lubia":
            echo "Lubia não é igual ao nome mencionado";
            break;
        default:/* aqui é tipo um else, se ele validar todos os valores e nenhum for TRUE ele devolve  a informação abaixo */
            echo "O nome não foi encontrado !";

    }

    /* Em resumo, se você tiver uma série de condições relacionadas que devem ser testadas em ordem, use "elseif".
     Se tiver uma variável ou expressão com diferentes valores e precisar executar blocos de código diferentes com base nesses valores, use "switch case".
    A escolha dependerá da lógica do seu programa e da forma como as condições ou valores estão estruturados. */
?>

