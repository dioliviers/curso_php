<?php
    $arr = [ 'nome' => 'thor', 'patas' => 4, 'cor' => 'Marrom' ]; /* inserido no array CHAVE e VALOR, quando
    for chamado a chave na variável do array ele exibira o valor atribuido a chave. */

    echo $arr["nome"];/* exibe o valor da chave nome */
    echo "<br>";
    echo $arr["patas"];/* exibe o valor da chave pata */
    echo "<br>";
    print_r($arr);/* com o print_r ele exibe a chave e o valor atribuido na variavel */


?>
