<?php
    echo true; /* verdadeiro */

    if (true){ /* aqui colocamos o bollean direto na expressão */
        echo "verdadeiro ! <br>"; 
    }

    if (5 > 2){ /* retorna true (verdadeiro ou false caso não seja com a logica da expressão) */
        echo "é verdadeiro <br>";
    }

    $pode_entrar = true; /* Pode entrar é true */
        if($pode_entrar){ /* se pode entrar == true ele exibe o conteúdo do bloco if. */
            echo "Pode entrar pau nu cu";
        }
?>
